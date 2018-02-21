<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'cate_id' => 'required', // toi cho echo toi nay ra dau n la cai o name :3 prduct name
            'product_name' => 'required|min:5',
            'price' => 'numeric| min:0',
            'sale_price' => 'numeric|min:0',// ma thoi sua luon di toi de max duoc khong? a ma nhu nay o nhin nha dc
        ];
    }
    public function messages(){
        return [
        'product_name.required' => 'Để trống là không có được',
        'price.numeric' => 'Giá phải là số.',
        'sale_price.numeric' => 'Giá phải là số.',
        'price.min' => 'Giá không được nhỏ hơn 0.',
        'sale_price.min' => 'Giá không được nhỏ hơn 0.',
        ];
    }
}
