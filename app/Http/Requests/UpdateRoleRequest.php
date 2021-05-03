<?php
namespace App\Http\Requests;
/**
* [These Class makes validation for creating new item on Role module]
* class UpdateRoleRequest
* @package App\Http\Requests
* @author Abdullah Alnahhal <abdullahalnahhal@gmail.com> <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
* @access public
*/
use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
	/**
     * Determine if the role is authorized to make this request.
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
        return Role::$rules;
    }
}
