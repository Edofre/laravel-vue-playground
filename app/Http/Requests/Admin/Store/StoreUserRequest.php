<?php

namespace App\Http\Requests\Admin\Store;

/**
 * Class StoreUserRequest
 * @package App\Http\Requests\Admin\Store
 */
class StoreUserRequest extends StoreRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|max:255|email|unique:users',
        ];
    }
}