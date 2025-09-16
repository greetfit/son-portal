<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Amenity;

class AmenitySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            // ---- Connectivity
            ['name' => 'Free WiFi',                 'category' => 'Connectivity'],
            ['name' => 'High-Speed Internet',       'category' => 'Connectivity'],

            // ---- Room
            ['name' => 'Air Conditioning',          'category' => 'Room'],
            ['name' => 'Heating',                   'category' => 'Room'],
            ['name' => 'Flat-screen TV',            'category' => 'Room'],
            ['name' => 'Minibar',                   'category' => 'Room'],
            ['name' => 'Tea/Coffee Maker',          'category' => 'Room'],
            ['name' => 'In-room Safe',              'category' => 'Room'],

            // ---- Bathroom
            ['name' => 'Private Bathroom',          'category' => 'Bathroom'],
            ['name' => 'Hot Water',                 'category' => 'Bathroom'],
            ['name' => 'Toiletries',                'category' => 'Bathroom'],
            ['name' => 'Hairdryer',                 'category' => 'Bathroom'],

            // ---- Food & Beverage
            ['name' => 'Restaurant',                'category' => 'Food & Beverage'],
            ['name' => 'Bar / Lounge',              'category' => 'Food & Beverage'],
            ['name' => 'Room Service',              'category' => 'Food & Beverage'],
            ['name' => 'Breakfast Buffet',          'category' => 'Food & Beverage'],

            // ---- Wellness & Recreation
            ['name' => 'Swimming Pool',             'category' => 'Wellness'],
            ['name' => 'Gym / Fitness Center',      'category' => 'Wellness'],
            ['name' => 'Spa',                       'category' => 'Wellness'],
            ['name' => 'Sauna/Steam Room',          'category' => 'Wellness'],

            // ---- Transport & Parking
            ['name' => 'Airport Shuttle',           'category' => 'Transport'],
            ['name' => 'Free Parking',              'category' => 'Transport'],
            ['name' => 'Valet Parking',             'category' => 'Transport'],

            // ---- Business
            ['name' => 'Business Center',           'category' => 'Business'],
            ['name' => 'Meeting/Conference Rooms',  'category' => 'Business'],

            // ---- Accessibility
            ['name' => 'Wheelchair Accessible',     'category' => 'Accessibility'],
            ['name' => 'Elevator',                  'category' => 'Accessibility'],

            // ---- Family & Policies
            ['name' => 'Family Rooms',              'category' => 'Family'],
            ['name' => 'Non-smoking Rooms',         'category' => 'Policy'],
            ['name' => 'Pet Friendly',              'category' => 'Policy'],

            // ---- Safety
            ['name' => '24h Front Desk',            'category' => 'Safety'],
            ['name' => 'CCTV in Common Areas',      'category' => 'Safety'],
            ['name' => 'Fire Extinguishers',        'category' => 'Safety'],
            ['name' => 'Smoke Alarms',              'category' => 'Safety'],
        ];

        foreach ($items as $i) {
            Amenity::firstOrCreate(
                ['name' => $i['name']],
                ['category' => $i['category']]
            );
        }
    }
}
