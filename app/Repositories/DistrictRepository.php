<?php
namespace App\Repositories;

use App\Models\District;
use App\Repositories\AbstractEloquentRepository;

class DistrictRepository extends AbstractEloquentRepository
{
    /**
     * @param District $model
     * @return void
     */
    public function __construct(District $model)
    {
        parent::__construct($model);
    }
}