<?php

namespace App\Http\Requests\Adminn;

use Illuminate\Foundation\Http\FormRequest;

class TransformasiRequest extends FormRequest
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
            'kode_wilayah' => 'required|max:255',
            'A' => 'required|max:255',
            'B' => 'required|max:255',
            'C' => 'required',
            'D' => 'required',
            'E'=> 'required',
            'F'=> 'required',
            'G'=> 'required',
            'H'=> 'required'
        ];
    }
}
