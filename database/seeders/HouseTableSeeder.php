<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\House;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = array_map('str_getcsv', file(__DIR__ . '/houses.csv'));
        foreach ($houses as $key => $house) {
            if ($key > 0) {
                $newHouse = new House();
                $newHouse->location = $house[0];
                $newHouse->image = $house[5];
                $newHouse->price = $house[11];
                $newHouse->save();
            }
        }
        ;
    }
}

