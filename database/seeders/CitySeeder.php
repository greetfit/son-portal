<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        // Wipe child table safely
        Schema::disableForeignKeyConstraints();
        DB::table('cities')->truncate();
        Schema::enableForeignKeyConstraints();

        $path = database_path('seeders/sql/cities.sql');
        $raw  = file_get_contents($path);

        // 1) Strip MySQL dump directives & DDL
        //    (e.g., SET ..., /*!40101 SET ... */, DROP TABLE, CREATE TABLE)
        $raw = preg_replace('/^\/\*![\s\S]*?\*\/;?/m', '', $raw);     // remove /*! ... */
        $raw = preg_replace('/^\s*SET\s+.*?;$/mi', '', $raw);         // remove SET ...
        $raw = preg_replace('/^\s*DROP\s+TABLE\s+.*?;$/mi', '', $raw); // remove DROP TABLE ...
        // remove CREATE TABLE ...; (multi-line)
        $raw = preg_replace('/^\s*CREATE\s+TABLE[\s\S]*?;$/mi', '', $raw);

        // 2) Split into individual statements and keep only INSERTs
        $statements = array_filter(array_map('trim', preg_split('/;\s*[\r\n]+/', $raw)));
        $inserts = array_values(array_filter($statements, fn($s) => stripos($s, 'INSERT INTO') === 0));

        // 3) Run INSERTs in chunks to avoid packet limits
        DB::beginTransaction();
        try {
            foreach ($inserts as $sql) {
                DB::unprepared($sql.';'); // re-add trailing semicolon
            }
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            // Make the error obvious while telling you which statement failed
            throw new \RuntimeException("CitySeeder failed on SQL:\n" . mb_strimwidth($sql ?? '', 0, 500, ' ...') . "\n\n" . $e->getMessage(), 0, $e);
        }
    }
}
