<?php


namespace Pkg\EasyCms\Admin\Main\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UserSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->rules = [
            'name'     => 'required',
            'email'    => 'email|unique:users,email',

            'status'   => 'int',
            'role_id'  => 'required',
        ];

        if ($this->method() == 'PUT') {
            $this->rules['email'] = 'email|unique:users,email,' . $this->route('id');
        }

        return $this->rules;
    }
}
