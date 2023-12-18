<?php

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\Mine;
use App\Models\EquipmentMine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipment = new Equipment();

        $equipment->name = "Caterpillar C20";
        $equipment->length = 34.21;
        $equipment->width = 12.10;
        $equipment->height = 5.02;
        $equipment->using_for = "Véhicule pour déplacer les minerais";

        $equipment->save();

        $equipment = Equipment::create([
            "name" => "Volvo T40",
            "length" => '25.01',
            "width" => '12.45',
            "height" => '4.61',
            "using_for" => "Véhicule de transport",
        ]);

        $mine = Mine::find(1);
        $equipment = Equipment::find(1);

        $equipmentMine = EquipmentMine::create([
            "mine_id" => $mine->id,
            "equipment_id" => $equipment->id,
            "date_begin" => new \DateTime(""),
            "date_end" => new \DateTime(""),
        ]);
    }
}
