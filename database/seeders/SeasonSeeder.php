<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasons = [
            'Winter',
            'Summer',
            'Autumn',
            'Spring',
        ];

        foreach ($seasons as $season) {
            $obj = new Season();
            $obj->name = $season;
            $obj->save();
        }
    }
}
