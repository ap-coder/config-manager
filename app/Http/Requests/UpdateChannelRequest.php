<?php

namespace App\Http\Requests;

use App\Channel;
use Illuminate\Foundation\Http\FormRequest;

class UpdateChannelRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('channel_edit');
    }

    public function rules()
    {
        return [
            'valid_as_of' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
