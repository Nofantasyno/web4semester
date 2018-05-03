<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createNotebookRequest extends FormRequest
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
            'brand' => 'required',
            'model' => 'required',
            'mass' => 'required',
            'resolution' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'graphics' => 'required',
            'hdd' => 'required',
            'price' => 'required',
            'img' => 'required'
        ];
    }
}
