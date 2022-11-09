<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EquipmentType;

class EquipmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EquipmentType::create([

            'type_name' => 'TP-Link TL-WR74',
            'sn_mask' => 'XXAAAAAXAA'


        ]);

        EquipmentType::create([

            'type_name' => 'D-Link DIR-300',
            'sn_mask' => 'NXXAAXZXaa'


        ]);

        EquipmentType::create([

            'type_name' => 'D-Link DIR-300 E',
            'sn_mask' => 'NAAAAXZXXX'


        ]);

        


    }
}
