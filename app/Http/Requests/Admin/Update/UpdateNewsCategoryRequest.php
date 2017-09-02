<?php

namespace App\Http\Requests\Admin\Update;

/**
 * Class UpdateNewsCategoryRequest
 * @package App\Http\Requests\Admin\Update
 */
class UpdateNewsCategoryRequest extends UpdateRequest
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
