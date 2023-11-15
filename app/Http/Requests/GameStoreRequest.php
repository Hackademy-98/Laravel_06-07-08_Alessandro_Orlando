<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|max:100|min:2",
            "description" => "required",
            "price" => "required|max:999|decimal:0,2",
            "img" => "image"
            
        ];
    }

public function messages(){
       return [
    "title.required" => "Campo obbligatorio",
    "title.max" => "Titolo troppo lungo",
    "title.min" => "Titolo troppo corto",
    "description.required" => "Campo obbligatorio",
    "price.decimal" => "il prezzo deve avere almeno 2 numeri decimali e deve essere inserito con il punto."

       ];
    }

}
