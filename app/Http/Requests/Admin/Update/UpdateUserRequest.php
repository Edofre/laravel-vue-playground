<?php

namespace App\Http\Requests\Admin\Update;

/**
 * Class UpdateUserRequest
 * @package App\Http\Requests\Admin\Update
 */
class UpdateUserRequest extends UpdateRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        $user = $this->route('user');

        $rules = [
            'email' => 'required|max:255|email|unique:users,email,' . $user->id,
        ];

        return $rules;
    }
}
