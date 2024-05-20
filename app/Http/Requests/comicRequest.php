<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class comicRequest extends FormRequest
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
            'title'=>'required|min:1|max:100',
            'description'=>'nullable',
            'price'=>'max:20|required',
            'series'=>'max:100|required',
            'sale_date'=>'nullable',
            'type'=>'max:100|required',
            'img'=>'nullable|url',
            'artist'=>'nullable',
            'writers'=>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.max' => 'Il prezzo non può superare 20 caratteri',
            'series.required' => 'La serie è un campo obbligatorio',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'sale_date.date' => 'La data di vendita deve essere una data valida',
            'img.url'=>'l\' url immessa non è valida'
        ];
    }
}
