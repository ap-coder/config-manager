<?php

namespace App\Http\Requests;

use App\SyncServer;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSyncServerRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('sync_server_edit');
    }

    public function rules()
    {
        return [
            'report_time' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
