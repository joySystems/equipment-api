<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Equipment;

use App\Http\Requests\EquipmentStoreRequest;
use App\Http\Requests\EquipmentUpdateRequest;

class EquipmentService
{
    //

        public function storeEquipment (EquipmentStoreRequest $request) {

        $validatedData = $request->validated();

        $equipmentsRequestData = $validatedData['equipments'];

        $dateTimeNow = now();
        $equipmentsData = [];

        foreach($equipmentsRequestData as $data) {
            $data['created_at'] = $dateTimeNow;
            $data['updated_at'] = $dateTimeNow;
            try {
                $equipmentsData[] = Equipment::create($data);
            }catch (\Illuminate\Database\QueryException $e) {

                $equipmentsData[] = ['error'=>$e];
            }
            

        }

        //$insertData = Equipment::insert($equipmentsData);
        $insertData = $equipmentsData;

        return $insertData;
    }


    public function updateEquipment (EquipmentUpdateRequest $request, $id) {

        $validatedData = $request->validated();

        $equipment = Equipment::find($id);

        try{

            $updated = $equipment->update($validatedData);

            return $equipment;

        }catch (\Illuminate\Database\QueryException $e) {

            return ['error'=>$e];
            }

       
        
         
    }

    public function deleteEquipment (Request $request, $id) {

        $equipment = Equipment::find($id);
        $equipment->delete();
        return $equipment;
    }


}
