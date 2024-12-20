<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'fone' => 'required',
            'nascimento' => 'required',
        ];
    }

    public function messages(): array
    {
        return [

            'nome.required' => 'O nome é obrigatório',
            'cpf.required' => 'O cpf é obrigatório',
            'email.required' => 'O email é obrigatório',
            'fone.required' => 'O fone é obrigatório',
            'nascimento.required' => 'O nascimento é obrigatório',
        ];
    }
}
