<?php

namespace App\Http\Requests\Admin\Update;

/**
 * Class UpdateNewsTagRequest
 * @package App\Http\Requests\Admin\Update
 */
class UpdateNewsTagRequest extends UpdateRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'        => 'required|min:3|max:255',
            'description' => 'required',
            'public'      => 'boolean',
        ];

        return $rules;
    }
}
