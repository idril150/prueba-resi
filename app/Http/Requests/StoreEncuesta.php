<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEncuesta extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'periodo' => 'required|min:10',
            'estado' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso,'
        ];
    }

    public function messages()
    {
        return [
            'periodo.required' => 'Debe ingresar el periodo del curso'
        ];
    }
}
