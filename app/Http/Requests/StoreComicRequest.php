<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            
            'title' => 'required|min:5|max:200',
            'description' => 'required|min:5',
            'thumb' => 'required|',
            'price' => 'required|',                
            'series' => 'required|',
            'sale_date' => 'required|date',
            'type' => 'required|',
            
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'description.required' => 'La descrizione deve essere inserita',
            'thumb.required' => 'L\'immagine deve essere inserita',
            'price.required' => 'Il prezzo deve essere inserita',
            'series.required' => 'La serie deve essere inserita',
            'sale_date.required' => 'La data deve essere inserita',
            'type.required' => 'Il tipo deve essere inserita',
        ];
    }
}
