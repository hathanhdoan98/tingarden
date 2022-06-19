<?php
namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\AbstractEloquentRepository;

class CustomerRepository extends AbstractEloquentRepository
{
    /**
     * @param Customer $model
     * @return void
     */
    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }
}