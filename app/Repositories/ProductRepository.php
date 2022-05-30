<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\AbstractEloquentRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository extends AbstractEloquentRepository
{
    /**
     * @param Product $model
     * @return void
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function findProduct(int $id): ?Model
    {
        return $this->findOneBy(['id' => $id], function (Builder $builder) {
            return $builder->with([
                'images' => function ($q) {
                    $q->orderBy('index', 'ASC');
                },
                'metaseo',
                'alias',
                'category'
            ]);
        });
    }

    /**
     * @param array $ids
     * @return Collection|null
     */
    public function findProductByids(array $ids): ?Collection
    {
        return $this->findBy(
            [
                'filter' => [
                    'id' => $ids
                ],
            ],
            function (Builder $builder) {
                return $builder->with([
                    'images' => function ($q) {
                        $q->orderBy('index', 'ASC');
                    },
                    'alias'
                ]);
            },
            false
        );
    }

    /**
     * @param array $searchCriteria
     * @return Model|null
     */
    public function paginateAllProduct(array $searchCriteria): LengthAwarePaginator
    {
        return $this->findBy(
            $searchCriteria,
            function (Builder $builder) {
                return $builder->with([
                    'images' => function ($q) {
                        $q->orderBy('index', 'ASC');
                    },
                    'category',
                    'alias'
                ]);
            }
        );
    }
}
