<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\EquipmentType;



class EquipmentTypeService
{
    
public function allEquipmentType(Request $request) {

if($request->query('q')){

   $query = $request->query('q');

    return EquipmentType::where('type_name', 'LIKE', '%' . $query . '%')->get();
}else{

    return EquipmentType::paginate(1);
}



   
}





 


}
