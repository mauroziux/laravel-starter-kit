<?php

namespace App\Repositories;

use App\Models\ciudades;
use InfyOm\Generator\Common\BaseRepository;

class ciudadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ciudad',
        'depto_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ciudades::class;
    }
}
