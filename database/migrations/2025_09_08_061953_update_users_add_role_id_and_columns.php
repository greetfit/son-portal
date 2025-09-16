<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        // A) Add column (nullable initially)
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'role_id')) {
                $table->unsignedBigInteger('role_id')->nullable()->after('email');
            }
        });

        // B) Backfill role_id
        $roleIds = DB::table('roles')->pluck('id', 'name'); // e.g. ['user' => 3, ...]
        $hasOldRole = Schema::hasColumn('users', 'role');

        if ($hasOldRole) {
            $users = DB::table('users')->select('id', 'role')->get();
            foreach ($users as $u) {
                $rid = $roleIds[$u->role] ?? ($roleIds['user'] ?? null);
                if ($rid) {
                    DB::table('users')->where('id', $u->id)->update(['role_id' => $rid]);
                }
            }
        }

        // Default any remaining NULLs to 'user'
        if (isset($roleIds['user'])) {
            DB::table('users')->whereNull('role_id')->update(['role_id' => $roleIds['user']]);
        }

        // C) Make NOT NULL (without requiring doctrine/dbal)
        // Comment this out if you prefer to keep it nullable.
        DB::statement('ALTER TABLE `users` MODIFY `role_id` BIGINT UNSIGNED NOT NULL');

        // D) Add FK (→ roles.id), restrict deletes
        Schema::table('users', function (Blueprint $table) {
            // if a FK might already exist from a previous run, drop it first:
            // try { $table->dropForeign(['role_id']); } catch (\Throwable $e) {}

            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'role_id')) {
                // Drop FK then column
                $table->dropForeign(['role_id']);
                $table->dropColumn('role_id');
            }
        });
    }
};
