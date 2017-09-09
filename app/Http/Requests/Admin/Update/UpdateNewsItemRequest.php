<?php

namespace App\Http\Requests\Admin\Update;

/**
 * Class UpdateNewsItemRequest
 * @package App\Http\Requests\Admin\Update
 */
class UpdateNewsItemRequest extends UpdateRequest
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
