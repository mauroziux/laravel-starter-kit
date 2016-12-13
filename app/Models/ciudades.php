<?php

namespace App\Models;


use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="ciudades",
 *      required={"ciudad", "depto_id"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ciudad",
 *          description="ciudad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="depto_id",
 *          description="depto_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class ciudades extends Model
{
    use SoftDeletes;

    public $table = 'ciudades';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ciudad',
        'depto_id'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ciudad' => 'string',
        'depto_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ciudad' => 'required',
        'depto_id' => 'required'
    ];



    
}
