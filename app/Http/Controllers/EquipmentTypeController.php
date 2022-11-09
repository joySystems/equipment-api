<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipmentType;
use App\Http\Resources\EquipmentTypeCollection;

class EquipmentTypeController extends Controller
{
    //
    public function index () {

        return new EquipmentTypeCollection(EquipmentType::all());
        
    }

    public function show (Request $request, $id) {

        $eq = EquipmentType::all();
        return $eq;
    }


    public function store () {

        $eq = EquipmentType::all();
        return $eq;
    }


    public function update (Request $request, $id) {

        $eq = EquipmentType::all();
        return $eq;
    }

    public function delete (Request $request, $id) {

        $eq = EquipmentType::all();
        return $eq;
    }


}
