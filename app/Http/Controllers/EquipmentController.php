<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Http\Resources\EquipmentResource;
use App\Http\Resources\EquipmentCollection;
use App\Http\Requests\EquipmentStoreRequest;
use App\Http\Requests\EquipmentUpdateRequest;

class EquipmentController extends Controller
{
    //

    public function index () {

        return new EquipmentCollection(Equipment::paginate(1));
        
    }


    public function show (Request $request, $id) {

        
        return new EquipmentResource(Equipment::find($id));
    }


    public function store (EquipmentStoreRequest $request) {

        $validatedData = $request->validated();

        $equipmentsRequestData = $validatedData['equipments'];

        $dateTimeNow = now();
        $equipmentsData = [];

        foreach($equipmentsRequestData as $data) {
            $data['created_at'] = $dateTimeNow;
            $data['updated_at'] = $dateTimeNow;

            $equipmentsData[] = $data;

        }

        $insertData = Equipment::insert($equipmentsData);
        return response()->json($insertData, 201);
    }


    public function update (EquipmentUpdateRequest $request, $id) {

        $validatedData = $request->validated();

        $equipment = Equipment::find($id);

        $updated = $equipment->update($validatedData);
        
        return response()->json($updated, 201);
    }

    public function delete (Request $request, $id) {

        $equipment = Equipment::find($id);
        $equipment->delete();
        return $equipment;
    }


}
