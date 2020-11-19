<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class entryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title'=>'required|min:7|max:50|unique:entries,id,'.auth()->id(),
            'content'=>'required|min:20|max:3000|'
        ];
    }
}
