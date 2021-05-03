<?php
namespace App\Http\Requests;
/**
* [These Class makes validation for creating new item on User module]
* class UpdateUserRequest
* @package App\Http\Requests
* @author Abdullah Alnahhal <abdullahalnahhal@gmail.com> <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
* @access public
*/
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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

    public function prepareForValidation()
    {
        if(!$this->password){
            $this->request->remove('password');
        }

        if(!$this->password_confirmation){
            $this->request->remove('password_confirmation');
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = User::$rules;
        $rules['email'] = 'required|email|unique:users,email,'.$this->route('user').',id|max:255';
        $rules['password'] = "nullable|confirmed|max:255";
        return $rules;
    }
}
