<?php

namespace App\Http\Requests;

use App\Cso;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCsoRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('cso_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
