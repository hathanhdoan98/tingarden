<?php

namespace App\Rules;

use App\Services\AliasService;
use Illuminate\Contracts\Validation\Rule;

class ValidateAlias implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(\request()->id){
            return !app(AliasService::class)->checkExist($value, \request()->id, $this->model);
        }
        $alias = app(AliasService::class)->findOneByAlias($value);
        return $alias ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Đường dẫn đã tồn tại. Vui lòng chọn giá trị khác';
    }
}
