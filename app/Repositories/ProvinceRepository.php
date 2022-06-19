<?php
namespace App\Repositories;

use App\Models\Province;
use App\Repositories\AbstractEloquentRepository;

class ProvinceRepository extends AbstractEloquentRepository
{
    /**
     * @param Province $model
     * @return void
     */
    public function __construct(Province $model)
    {
        parent::__construct($model);
    }
}