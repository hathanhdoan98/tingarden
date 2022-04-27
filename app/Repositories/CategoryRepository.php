<?php
namespace App\Repositories;

use App\Models\Category;
use App\Repositories\AbstractEloquentRepository;

class CategoryRepository extends AbstractEloquentRepository
{
    /**
     * @param Category $model
     * @return void
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    /**
     * @param Category $model
     * @return void
     */
    public function paginateAll(array $searchCriteria)
    {
        parent::__construct($model);
    }
}