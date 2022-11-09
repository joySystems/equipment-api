<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';


    protected $fillable = ['equipment_type_id', 'serial_number', 'comments'];


    protected $hidden = [
        'created_at', 
        'updated_at', 
        
    ];

}
