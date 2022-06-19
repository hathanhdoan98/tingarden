<?php
namespace App\Repositories;

use App\Models\Order;
use App\Repositories\AbstractEloquentRepository;

class OrderRepository extends AbstractEloquentRepository
{
    /**
     * @param Order $model
     * @return void
     */
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }
}