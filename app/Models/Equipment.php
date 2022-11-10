<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'equipment';


    protected $fillable = ['equipment_type_id', 'serial_number', 'comments'];


    protected $hidden = [
        'created_at', 
        'updated_at', 
        
    ];

   

    /**
     * Атрибуты, которые должны быть преобразованы в дату
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}
