<?php

namespace App\Http\Requests;

use App\ChannelServer;
use Illuminate\Foundation\Http\FormRequest;

class StoreChannelServerRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('channel_server_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
