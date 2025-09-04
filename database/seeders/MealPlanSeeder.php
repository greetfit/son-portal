<?php

namespace Database\Seeders;

use App\Models\MealPlan;
use Illuminate\Database\Seeder;

class MealPlanSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['code' => 'BB', 'description' => 'Bed & Breakfast'],
            ['code' => 'HB', 'description' => 'Half Board'],
            ['code' => 'FB', 'description' => 'Full Board'],
            ['code' => 'AI', 'description' => 'All Inclusive'],
        ];

        foreach ($items as $i) {
            MealPlan::firstOrCreate(['code' => $i['code']], $i);
        }
    }
}
