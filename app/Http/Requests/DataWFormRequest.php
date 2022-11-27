<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataWFormRequest extends BaseFormRequest
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
         'status' =>'nullable|in:paid,pending,reject',
         'currency'=>'nullable|string',

        ];
    }


        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'status.in'=>' :attribute is used in paid,pending,reject',
        ];
    }
}
