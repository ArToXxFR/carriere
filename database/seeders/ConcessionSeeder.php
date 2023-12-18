<?php

namespace Database\Seeders;

use App\Models\Concession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class ConcessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concession::create([
            'name'=> 'La mine en or',
            'siret'=> '1234678901234',
            'phone'=> '06060606',
        ]);

        Concession::create([
            'name'=> 'La mine en argent',
            'siret'=> '1234678907234',
            'phone'=> '0606060606',
        ]);
    }
}
