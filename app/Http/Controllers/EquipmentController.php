<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    //

    public function index () {

        $eq = Equipment::all();
        return $eq;
    }


}
