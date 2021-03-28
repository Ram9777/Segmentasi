<?php

namespace App\Http\Requests\Adminn;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PelangganRequest extends FormRequest
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
            //'roles' => 'required|max:255',
            'email' => 'required|max:255'
            //'password'=> 'required|max:255'
        ];
    }
}
