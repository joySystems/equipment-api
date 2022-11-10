<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Services\EquipmentService;
use App\Http\Resources\EquipmentResource;
use App\Http\Resources\EquipmentCollection;
use App\Http\Requests\EquipmentStoreRequest;
use App\Http\Requests\EquipmentUpdateRequest;

class EquipmentController extends Controller
{
    //

    private $equipmentService = null;


    public function __construct() {

        $this->equipmentService = new EquipmentService();

    }

    public function index (Request $request) {

        return new EquipmentCollection($this->equipmentService->allEquipment($request));
        
    }


    public function show (Request $request, $id) {

        
        return new EquipmentResource($this->equipmentService->showEquipment($request, $id));
    }


    public function store (EquipmentStoreRequest $request) {

        $insertData = $this->equipmentService->storeEquipment($request);

        return new EquipmentCollection($insertData);
    }


    public function update (EquipmentUpdateRequest $request, $id) {

        $updateData = $this->equipmentService->updateEquipment($request, $id);
        
        return new EquipmentResource($updateData);
    }

    public function delete (Request $request, $id) {

        $deleteData = $this->equipmentService->deleteEquipment($request, $id);
        return new EquipmentResource($deleteData);
    }


}
