<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class CreateProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'min:0',
            'sale_off_price' => 'min:0',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm bắt buộc phải có',
            'price.min' => 'Giá tiền phải >= 0',
            'sale_off_price.min' => 'Giá khuyến mãi phải >= 0',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $message = [];
        foreach ($errors as $key=>$error) {
            $message[] = $errors[$key][0];
        }
        throw new HttpResponseException(response()->json([
            'status'=>  200,
            'message' => $message[0],
            'data' =>[],
            'success' => false,
        ], 200));

    }
}
