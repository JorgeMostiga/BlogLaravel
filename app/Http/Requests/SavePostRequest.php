<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Determina si un usuario esta autorizado para realizar una paticion
     * con las reglas que se defienen abajo, lo podemos condicionar
     */
    public function authorize(): bool
    {
        //se puede condicionar por ejemplo, si el usuario el admin
        // if($request->user()->isAdmin())
        return true; //True: Todos los usuario estan autorizados, False: no se autoriza para nadie
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //en caso de que las reglas de validacion del update() y store() varien s epuede
        //realizar comprobaciones como sigue:
        
        /* if($this->isMethod('PATCH')){
            return [
                'title' => ['min:8']
            ];
        } */
        return [
            //Se definen las reglas de validacion
            'title' => ['required', 'min:4'],
            'body' => ['required']
        ];
    }
}
