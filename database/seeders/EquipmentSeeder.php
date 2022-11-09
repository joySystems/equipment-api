<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipment;


class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Equipment::create([

            'equipment_type_id' => '1',
            'serial_number' => '09FGHJK5ER',
            'comments' => 'роутер 1'

        ]);

        Equipment::create([

            'equipment_type_id' => '1',
            'serial_number' => '09FGHJK5ED',
            'comments' => 'роутер 2'

        ]);

        Equipment::create([

            'equipment_type_id' => '2',
            'serial_number' => '455AAX-Xaa',
            'comments' => 'роутер 3'

        ]);

        Equipment::create([

            'equipment_type_id' => '2',
            'serial_number' => '455AAX-Xbb',
            'comments' => 'роутер 4'

        ]);

        Equipment::create([

            'equipment_type_id' => '3',
            'serial_number' => 'NAAAAX-XXX',
            'comments' => 'роутер 5'

        ]);


    }
}
