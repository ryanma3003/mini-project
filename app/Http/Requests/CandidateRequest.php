<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class CandidateRequest extends FormRequest
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
            'name' => 'required|string',
            'address' => 'required|string',
            'birthday' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'salary' => 'required|string',
            'id_college' => 'required',
            'id_degree' => 'required',
            'thesis' => 'required|string',
            'id_status' => 'required',
            'id_religion' => 'required',
            'phone_number' => 'required|string',
        ];
    }
}
