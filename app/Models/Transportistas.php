<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transportistas
 * @package App\Models
 * @version December 19, 2019, 6:10 pm UTC
 *
 * @property string DNI
 * @property string Nombres
 * @property string Apellidos
 * @property string Celular
 * @property string direccion
 * @property string Correo
 * @property string Nota_adicional
 */
class Transportistas extends Model
{
    use SoftDeletes;

    public $table = 'transportistas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'DNI',
        'Nombres',
        'Apellidos',
        'Celular',
        'direccion',
        'Correo',
        'Nota_adicional'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'DNI' => 'string',
        'Nombres' => 'string',
        'Apellidos' => 'string',
        'Celular' => 'string',
        'direccion' => 'string',
        'Correo' => 'string',
        'Nota_adicional' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'DNI' => 'required',
        'Nombres' => 'required',
        'Apellidos' => 'required',
        'Celular' => 'required',
        'direccion' => 'required',
        'Correo' => 'email'
    ];

    
}
