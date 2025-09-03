<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::where('id', 1)->update([
            'role' => 'super_admin',
        ]);
    }
}
