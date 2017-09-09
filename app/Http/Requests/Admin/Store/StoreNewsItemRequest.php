<?php

namespace App\Http\Requests\Admin\Store;

/**
 * Class StoreNewsItemRequest
 * @package App\Http\Requests\Admin\Store
 */
class StoreNewsItemRequest extends StoreRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        $rules = [
            'news_category_id' => 'required',
            'title'            => 'required|min:3|max:255',
            'message'          => 'required',
            'public'           => 'boolean',
        ];

        return $rules;
    }
}