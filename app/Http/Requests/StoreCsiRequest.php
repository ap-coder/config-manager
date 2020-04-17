<?php

namespace App\Http\Requests;

use App\Csi;
use Illuminate\Foundation\Http\FormRequest;

class StoreCsiRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('csi_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
