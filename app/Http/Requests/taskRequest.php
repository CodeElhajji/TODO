<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class taskRequest extends FormRequest
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
            'task_ar' => 'required',
            'task_en' => 'required',
            'timetask' => 'required',
        ];
    }
    public function messages(){
        return [
            'task_ar.required' => __('messages.task required'),
            'task_en.required' => __('messages.task required'),
            'timetask.required' => __('messages.timetask required'),
            'task_ar.unique' => __('messages.task unique'),
            'task_en.unique' => __('messages.task unique'),
            ];
    }
}
