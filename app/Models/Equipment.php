<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\EquipmentType;

/**
 * App\Models\Equipment
 *
 * @property int $id
 * @property int $equipment_type_id
 * @property string $serial_number
 * @property string|null $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read EquipmentType|null $equipmentType
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newQuery()
 * @method static \Illuminate\Database\Query\Builder|Equipment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereEquipmentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Equipment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Equipment withoutTrashed()
 * @mixin \Eloquent
 */
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


    /**
     * Get the type associated with the equipment.
     */

    public function equipmentType () {

        return $this->hasOne(EquipmentType::class, "id", "equipment_type_id");
    }

}
