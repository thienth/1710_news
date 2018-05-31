<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class SaveGameRequest extends FormRequest
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
            'name' => 'required|max:100',
            'slug' => [
                'required',
                Rule::unique('games')->ignore($this->id)
            ]
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập tên!',
            'name.max' => 'Độ dài không quá 100 ký tự!',
            'slug.required' => 'Vui lòng nhập đường dẫn!',
            'slug.unique' => 'Đường dẫn đã tồn tại, vui lòng chọn đường dẫn khác!',
        ];
    }
}
