<?php

namespace App\Http\Requests;

use App\Csi;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCsiRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('csi_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
