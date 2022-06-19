<?php
namespace App\Repositories;

use App\Models\Ward;
use App\Repositories\AbstractEloquentRepository;

class WardRepository extends AbstractEloquentRepository
{
    /**
     * @param Ward $model
     * @return void
     */
    public function __construct(Ward $model)
    {
        parent::__construct($model);
    }
}