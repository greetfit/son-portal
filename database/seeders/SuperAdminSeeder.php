<?php
// database/seeders/SuperAdminSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        // 0) Ensure required roles exist (upsert makes it idempotent)
        DB::table('roles')->upsert([
            ['name' => 'super_admin', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'manager',     'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user',        'created_at' => $now, 'updated_at' => $now],
            ['name' => 'DMC',         'created_at' => $now, 'updated_at' => $now],
            ['name' => 'staff',       'created_at' => $now, 'updated_at' => $now],
        ], ['name'], ['updated_at']); // update only updated_at on conflict

        // 1) Fetch the role id (MUST exist now)
        $superAdminRoleId = (int) DB::table('roles')->where('name', 'super_admin')->value('id');

        // Safety guard: if still missing, bail clearly
        if (!$superAdminRoleId) {
            throw new \RuntimeException("super_admin role not found; ensure roles table is migrated.");
        }

        // 2) Create or update the admin user with non-null role_id
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@son.com'],
            [
                'name'              => 'Admin',
                'password'          => Hash::make('password123'), // change in prod
                'role_id'           => $superAdminRoleId || '3',
                'email_verified_at' => $now,
                'remember_token'    => Str::random(20),
                'updated_at'        => $now,
                'created_at'        => $now, // ignored on update
            ]
        );
    }
}
