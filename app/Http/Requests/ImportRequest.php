<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportRequest extends FormRequest
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
            'file'    => 'required|max:200|mimes:xml,xlsx'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'file.required'       => 'Selecione um arquivo para importação.',
            'file.max'            => 'Quantidade máximo de caracteres excedido.',
            'file.mimes'          => 'Selecione um arquivo valido para importação (.xml ou .xlsx).',
        ];
    }
}
