<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipmentType;
use App\Services\EquipmentTypeService;
use App\Http\Resources\EquipmentTypeCollection;

class EquipmentTypeController extends Controller
{

    private $equipmentTypeService = null;


    public function __construct() {

        $this->equipmentTypeService = new EquipmentTypeService();

    }
    //
    public function index (Request $request) {

        return new EquipmentTypeCollection($this->equipmentTypeService->allEquipmentType($request));
        
    }

    

}
