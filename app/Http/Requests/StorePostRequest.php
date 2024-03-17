<?php

namespace App\Http\Requests;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //true ga uzgartiriladi aetentifikatsiya payt ishlatamz
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|max:255',
            'short_content'=>'required',
            'content'=>'required',
            'photo'=>'nullable|image|max:2024',
        ];
    }
}
