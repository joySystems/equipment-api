<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Http\Resources\EquipmentResource;
use App\Http\Resources\EquipmentCollection;

class EquipmentController extends Controller
{
    //

    public function index () {

        return new EquipmentCollection(Equipment::all());
        
    }


    public function show (Request $request, $id) {

        
        return new EquipmentResource(Equipment::find($id));
    }


    public function store () {

        $eq = Equipment::all();
        return $eq;
    }


    public function update (Request $request, $id) {

        $eq = Equipment::all();
        return $eq;
    }

    public function delete (Request $request, $id) {

        $eq = Equipment::all();
        return $eq;
    }


}
