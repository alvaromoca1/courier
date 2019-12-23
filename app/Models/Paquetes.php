<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paquetes
 * @package App\Models
 * @version December 19, 2019, 7:22 pm UTC
 *
 * @property string estado
 * @property string Codigo_paquete
 * @property integer cliente_id
 * @property string fecha_resivido
 * @property string fecha_entrega
 * @property string Descripcion
 * @property string Novedades
 * @property string Total_neto
 * @property string total_IGV
 * @property string Nombre_destino
 * @property string Ciudad_destino
 * @property string direccion_destino
 * @property string celular_destino
 */
class Paquetes extends Model
{
    use SoftDeletes;

    public $table = 'paquetes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'estado',
        'Codigo_paquete',
        'cliente_id',
        'fecha_resivido',
        'fecha_entrega',
        'Descripcion',
        'Novedades',
        'Total_neto',
        'total_IGV',
        'Nombre_destino',
        'Ciudad_destino',
        'direccion_destino',
        'celular_destino'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'estado' => 'string',
        'Codigo_paquete' => 'string',
        'cliente_id' => 'integer',
        'fecha_resivido' => 'string',
        'fecha_entrega' => 'string',
        'Descripcion' => 'string',
        'Novedades' => 'string',
        'Total_neto' => 'string',
        'total_IGV' => 'string',
        'Nombre_destino' => 'string',
        'Ciudad_destino' => 'string',
        'direccion_destino' => 'string',
        'celular_destino' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estado' => 'required',
        'Codigo_paquete' => 'required',
        'cliente_id' => 'required',
        'fecha_resivido' => 'required',
        'fecha_entrega' => 'required',
        'Descripcion' => 'required',
        'Novedades' => 'required',
        'Total_neto' => 'required',
        'total_IGV' => 'required',
        'Nombre_destino' => 'required',
        'Ciudad_destino' => 'required',
        'direccion_destino' => 'required'
    ];

    
}
