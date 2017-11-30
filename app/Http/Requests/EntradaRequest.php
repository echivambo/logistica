<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaRequest extends FormRequest
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
            'quantidade'=>'required',
            'comentario'=>'min:2',
            'data_entrada'=>'required',
            'produto_id'=>'required|integer|min:1',
            'franquia_id'=>'required|integer|min:1',
            'user_id'=>'required|integer|min:1',
        ];
    }
}
