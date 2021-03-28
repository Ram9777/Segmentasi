<?php

namespace App\Http\Requests\Adminn;

use Illuminate\Foundation\Http\FormRequest;

class ComplaintRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'golongan' => 'required|max:255',
            'id_jeniskeluhan' => 'required',
            'keterangan' => 'required',
            'tanggal'=> 'required|date'
        ];
    }
}
