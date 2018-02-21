<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProduct extends FormRequest
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
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required'
        ];
    }
    public function messages(){
        'name.required' => 'Khogn duoc de trong dau baby',
        'price.required' => 'Khogn duoc de trong dau baby',
        'price.numeric' => 'cho so vao ?',
        'sale_product.required' => 'Khogn duoc de trong dau baby',
        'sale_proudct.numeric' => 'Cho so vao',
        'image.required' => 'Khogn duoc de trong dau baby',
    }
}
