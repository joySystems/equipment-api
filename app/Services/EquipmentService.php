<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Models\EquipmentType;
use App\Http\Requests\EquipmentStoreRequest;
use App\Http\Requests\EquipmentUpdateRequest;

class EquipmentService
{
    
public function allEquipment(Request $request) {

if($request->query('q')){

   $query = $request->query('q');

    return Equipment::where('serial_number', 'LIKE', '%' . $query . '%')->get();
}else{

    return Equipment::paginate(1);
}



   
}


public function showEquipment(Request $request, $id) {


    return Equipment::find($id);
}



        public function storeEquipment (EquipmentStoreRequest $request) {

        $validatedData = $request->validated();

        $equipmentsRequestData = $validatedData['equipments'];

        $dateTimeNow = now();
        $equipmentsData = [];

        foreach($equipmentsRequestData as $data) {
            $data['created_at'] = $dateTimeNow;
            $data['updated_at'] = $dateTimeNow;
            $mask = EquipmentType::find( $data['equipment_type_id'])->sn_mask;


            if (strlen($data['serial_number']) == strlen($mask)){



            try {
                $equipmentsData[] = Equipment::create($data);
            }catch (\Illuminate\Database\QueryException $e) {

                $equipmentsData[] = ['error'=>$e];
            }

        }else {

            $equipmentsData[] = ['error'=> "Серийный номер не соответствует маске", "serial" => $data['serial_number']];  
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
