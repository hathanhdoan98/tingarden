<?php

namespace App\Http\Requests\Order;

use App\Http\Requests\ApiRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class CreateOrderRequest extends ApiRequest
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
            'customer.name' => 'required|string|max:255',
            'customer.phone' => 'required|string|max:12',
            'customer.email' => 'nullable|sometimes|email|max:255',
            'customer.address' => 'required|string|max:255',
            'customer.province_code' => 'required|string|max:255',
            'customer.district_code' => 'required|string|max:255',
            'customer.ward_code' => 'required|string|max:255',
            'note' => 'nullable|string|max:255',
            'products' => 'required',
            'products.*.id' => 'required|integer',
            'products.*.quantity' => 'required|integer|min:1|max:999',
            'shipping_method_id' => 'integer|nullable|sometimes',
            'payment_method_id' => 'integer|nullable|sometimes|exists:payment_methods,id',
        ];
    }

}
