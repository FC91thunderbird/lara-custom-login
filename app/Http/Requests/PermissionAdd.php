<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionAdd extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    function formValidate(){
        $input = $this->all();

        if(isset($input['name'])){
            $input['name'] = preg_replace('/[^a-zA-Z0-9\s]/','',$input['name']);
            $input['name'] = trim($input['name']);
        }

        return $this->replace($input);
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:permissions,name'
        ];
    }
}
