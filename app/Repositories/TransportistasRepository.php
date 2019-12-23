<?php

namespace App\Repositories;

use App\Models\Transportistas;
use App\Repositories\BaseRepository;

/**
 * Class TransportistasRepository
 * @package App\Repositories
 * @version December 19, 2019, 6:10 pm UTC
*/

class TransportistasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'DNI',
        'Nombres',
        'Apellidos',
        'Celular',
        'direccion',
        'Correo',
        'Nota_adicional'
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
        return Transportistas::class;
    }
}
