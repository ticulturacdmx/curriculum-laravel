<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormularioRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'curp' => 'required|max:18|min:18',
            'tel1' => 'required|numeric',
            'tel2' => 'required|numeric',
            'urlcv' => 'required',
            'politicas' => 'required',
        ];
    }
    public function messages()
    {
     return [

        'name.required' => 'Nesecita ingresar el nombre para continuar',
        'email.required' => 'Nesecita ingresar su correo para continuar',
        'curp.required' => 'Nesecita ingresar su curp para continuar',
        'tel1.required' => 'Nesecita ingresar un telefono para continuar',
        'tel2.required' => 'Nesecita ingresar otro numero de telefono para continuar',
        'urlcv.required' => 'Su curriculim es obligatorio para continuar',
        'politicas.required' => 'Debe aceptar las politicas para continuar',
        

     ];   
    }
}
