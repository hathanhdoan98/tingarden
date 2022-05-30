<?php

namespace App\Http\Requests\Cart;

use App\Http\Requests\ApiRequest;

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
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1|max:999',
        ];
    }
}
