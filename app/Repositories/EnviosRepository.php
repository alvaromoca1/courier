<?php

namespace App\Repositories;

use App\Models\Envios;
use App\Repositories\BaseRepository;

/**
 * Class EnviosRepository
 * @package App\Repositories
 * @version December 19, 2019, 7:28 pm UTC
*/

class EnviosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Envios::class;
    }
}
