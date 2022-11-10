<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipmentType;
use App\Http\Resources\EquipmentTypeCollection;

class EquipmentTypeController extends Controller
{
    //
    public function index () {

        return new EquipmentTypeCollection(EquipmentType::paginate(1));
        
    }

    

}
