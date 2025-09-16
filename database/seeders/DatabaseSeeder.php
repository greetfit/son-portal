<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Optional: only if you keep the demo user block enabled
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        // RolesTableSeeder::class,   // must run first
        SuperAdminSeeder::class,   // creates admin with role_id
        DistrictSeeder::class,
        CitySeeder::class,
        AmenitySeeder::class,
        CategorySeeder::class,
    ]);

    // OPTIONAL demo user — include role_id!
    // $userRoleId = (int) DB::table('roles')->where('name', 'user')->value('id')
    //     ?: DB::table('roles')->insertGetId([
    //         'name' => 'user', 'created_at' => now(), 'updated_at' => now(),
    //     ]);

    User::updateOrCreate(
        ['email' => 'demo@son.com'],
        [
            'name'              => 'Demo User',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role_id'           => 3,   // <- REQUIRED
            'remember_token'    => Str::random(10),
        ]
    );
}

}
