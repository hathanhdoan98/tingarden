<?php

namespace App\Http\Requests\Cart;

use App\Http\Requests\ApiRequest;
use Illuminate\Validation\Rule;

class AddToCartRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_id' => [
                'required',
                'integer',
                Rule::exists('products','id')->where(function($q){
                    return $q->where('status', config('common.status.active'));
                })
            ],
            'quantity' => 'required|integer|min:1|max:999',
        ];
    }

    public function messages()
    {
        return [
            'product_id.exists' => 'Sản phẩm này không còn được bán'
        ];
    }
}
