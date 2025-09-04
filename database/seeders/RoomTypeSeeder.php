<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['code' => 'SGL', 'description' => 'Single'],
            ['code' => 'DBL', 'description' => 'Double'],
            ['code' => 'TPL', 'description' => 'Triple'],
            ['code' => 'QAD', 'description' => 'Quad'],
        ];

        foreach ($items as $i) {
            RoomType::firstOrCreate(['code' => $i['code']], $i);
        }
    }
}
