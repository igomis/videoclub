<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DateTime;

class StoreMovie extends FormRequest
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
        $now = new DateTime;
        $year = $now->format("Y");
        return [
            'title' => 'required|max:255',
            'year' => "required|numeric|min:1900|max:$year",
            'poster' => 'required'
        ];
    }
}
