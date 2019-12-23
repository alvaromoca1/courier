<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clientes
 * @package App\Models
 * @version December 19, 2019, 6:05 pm UTC
 *
 * @property string Nombres
 * @property string Apellidos
 * @property string Celular
 * @property string correo
 * @property string DNI
 * @property string Ciudad
 * @property string Direccion
 * @property string Nota_adicional
 */
class Clientes extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombres',
        'Apellidos',
        'Celular',
        'correo',
        'DNI',
        'Ciudad',
        'Direccion',
        'Nota_adicional'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Nombres' => 'string',
        'Apellidos' => 'string',
        'Celular' => 'string',
        'correo' => 'string',
        'DNI' => 'string',
        'Ciudad' => 'string',
        'Direccion' => 'string',
        'Nota_adicional' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombres' => 'required',
        'Apellidos' => 'required',
        'Celular' => 'numeric',
        'correo' => 'email',
        'DNI' => 'required',
        'Ciudad' => 'required',
        'Direccion' => 'required'
    ];

    
}
