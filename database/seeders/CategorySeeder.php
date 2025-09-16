<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => '3-Star', 'type' => 'star'],
            ['name' => '4-Star', 'type' => 'star'],
            ['name' => '5-Star', 'type' => 'star'],
            ['name' => 'City',   'type' => 'theme'],
            ['name' => 'Beach',  'type' => 'theme'],
            ['name' => 'Family', 'type' => 'theme'],
        ];

        foreach ($items as $item) {
            Category::updateOrCreate(
                ['name' => $item['name'], 'type' => $item['type']],
                $item
            );
        }
    }
}
