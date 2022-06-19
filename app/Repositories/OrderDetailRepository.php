<?php
namespace App\Repositories;

use App\Models\OrderDetail;
use App\Repositories\AbstractEloquentRepository;

class OrderDetailRepository extends AbstractEloquentRepository
{
    /**
     * @param OrderDetail $model
     * @return void
     */
    public function __construct(OrderDetail $model)
    {
        parent::__construct($model);
    }
}