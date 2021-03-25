<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name'      => 'required|max:200',
            'course_id' => 'required|max:200',
            'class'     => 'required|max:200',
            'status'    => 'required|max:200',
            'image'     => 'required|max:200|mimes:jpg,jpeg,png,gif',
            'zip_code'  => 'required|max:200',
            'street'    => 'required|max:200',
            'number'    => 'required|max:200',
            'district'  => 'required|max:200',
            'city'      => 'required|max:200',
            'state'     => 'required|max:200',
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
            'name.required'         => 'Informe o nome do Aluno.',
            'name.max'              => 'Quantidade máximo de caracteres excedido.',
            'course_id.required'    => 'Selecione o curso.',
            'course_id.max'         => 'Quantidade máximo de caracteres excedido.',
            'class.required'        => 'Informe a turma.',
            'class.max'             => 'Quantidade máximo de caracteres excedido.',
            'status.required'       => 'Informe o status do Aluno.',
            'status.max'            => 'Quantidade máximo de caracteres excedido.',
            'image.required'        => 'Selecione uma imagem para upload.',
            'image.max'             => 'Quantidade máximo de caracteres excedido.',
            'image.mimes'           => 'Selecione uma imagem valida para upload (jpg, jpeg, png ou gif).',
            'zip_code.required'     => 'Preencha o CEP.',
            'zip_code.max'          => 'Quantidade máximo de caracteres excedido.',
            'street.required'       => 'Informe o nome da rua.',
            'street.max'            => 'Quantidade máximo de caracteres excedido.',
            'number.required'       => 'Informe o número.',
            'number.max'            => 'Quantidade máximo de caracteres excedido.',
            'district.required'     => 'Informe o bairro.',
            'district.max'          => 'Quantidade máximo de caracteres excedido.',
            'city.required'         => 'Informe a cidade.',
            'city.max'              => 'Quantidade máximo de caracteres excedido.',
            'state.required'        => 'Informe o estado.',
            'state.max'             => 'Quantidade máximo de caracteres excedido.',
        ];
    }
}
