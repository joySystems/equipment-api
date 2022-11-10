<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EquipmentType
 *
 * @property int $id
 * @property string $type_name
 * @property string $sn_mask
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType whereSnMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType whereTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EquipmentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EquipmentType extends Model
{
    use HasFactory;


    protected $table = 'equipment_types';

    
}
