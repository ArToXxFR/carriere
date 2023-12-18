<?php

namespace Database\Seeders;

use App\Models\Mine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mine::create([
            'name' => "La pépite",
            'longitude' => 5.4754,
            'latitude' => 7.45745,
            'concession_id' => 1,
        ]);

        Mine::create([
            'name' => "Lithium 70",
            'longitude' => 5.4754,
            'latitude' => 7.45745,
            'concession_id' => 1,
        ]);
    }
}
