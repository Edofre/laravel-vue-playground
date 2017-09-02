<?php

namespace App\Http\Requests\Admin\Store;

/**
 * Class StoreNewsCategoryRequest
 * @package App\Http\Requests\Admin\Store
 */
class StoreNewsCategoryRequest extends StoreRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'        => 'required|max:255',
            'description' => 'required',
            'public'      => 'boolean',
        ];

        return $rules;
    }
}