<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipmentType;

class EquipmentTypeController extends Controller
{
    //
    public function index () {

        $eq = EquipmentType::all();
        return $eq;
    }


}
