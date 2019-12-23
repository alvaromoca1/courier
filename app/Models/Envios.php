<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Envios
 * @package App\Models
 * @version December 19, 2019, 7:28 pm UTC
 *
 * @property integer trasportista_id
 * @property integer paquete_id
 * @property string descripcion
 */
class Envios extends Model
{
    use SoftDeletes;

    public $table = 'envios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'trasportista_id',
        'paquete_id',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'trasportista_id' => 'integer',
        'paquete_id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'trasportista_id' => 'required',
        'paquete_id' => 'required',
        'descripcion' => 'required'
    ];

    
}
