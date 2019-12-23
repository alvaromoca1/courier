<?php

namespace App\Repositories;

use App\Models\Paquetes;
use App\Repositories\BaseRepository;

/**
 * Class PaquetesRepository
 * @package App\Repositories
 * @version December 19, 2019, 7:22 pm UTC
*/

class PaquetesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estado',
        'Codigo_paquete',
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paquetes::class;
    }
}
