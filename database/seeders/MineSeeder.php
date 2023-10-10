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
            'name' => "TestMine",
            'longitude' => 5.4754,
            'latitude' => 7.45745,
            'idConcession' => 1,
        ]);
    }
}
