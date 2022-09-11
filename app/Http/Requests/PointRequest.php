<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PointRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'latitude' => 'required|numeric|between:-90.000000,90.000000',
            'longitude' => 'required|numeric|between:-180.000000,180.000000',
            'user_id' => 'required|exists:users,id',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.max' => 'Длина названия не должна превышать 50 символов',
            'latitude.between' => 'Широта должна находиться в промешужтке от -90 до 90',
            'longitude.between' => 'Долгота должна находиться в промешужтке от -180 до 180',
            'latitude.numeric' => 'Широта должна быть в формате "12.345678"',
            'longitude.numeric' => 'Долгота должна быть в формате "12.345678"',
        ];
    }
}