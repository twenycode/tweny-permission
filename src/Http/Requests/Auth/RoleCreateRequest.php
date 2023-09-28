<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseFormRequest;

class RoleCreateRequest extends BaseFormRequest
{
    //Determine if the user is authorized to make this request.
    public function authorize()
    {
        return $this->checkPermission('role_create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','max:50','unique:permissions'],
            'permissions' => ['nullable','array'],
            'descriptions' => ['string','nullable'],
        ];
    }
}
