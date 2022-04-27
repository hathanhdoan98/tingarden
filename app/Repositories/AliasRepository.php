<?php

namespace App\Repositories;

use App\Models\Alias;
use App\Repositories\AbstractEloquentRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class AliasRepository extends AbstractEloquentRepository
{
    /**
     * @param Alias $model
     * @return void
     */
    public function __construct(Alias $model)
    {
        parent::__construct($model);
    }

    /**
     * @param string $alias
     * @return Model|null
     */
    public function findOneByAlias(string $alias): ?Model
    {
        return $this->findOneBy(['alias' => $alias], function (Builder $builder) {
            return $builder->with(['model']);
        });
    }

    /**
     * @param string $alias
     * @param int $modelId
     * @param string $modelType
     * @return bool
     */
    public function checkExist(string $alias, int $modelId, string $modelType): bool
    {
        $alias = $this->findOneBy(['alias' => $alias], function (Builder $builder) use ($modelId, $modelType) {
            $builder->where(function ($query) use ($modelId, $modelType) {
                $query->where('model_id', '!=', $modelId)->orWhere('model_type', '!=', $modelType);
            });
        });

        return $alias ? true : false;
    }
}
