<?php

namespace App\Http\Requests;

use App\Cso;
use Illuminate\Foundation\Http\FormRequest;

class StoreCsoRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('cso_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
