<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Channel extends Model
{
    use SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'valid_as_of',
    ];

    protected $fillable = [
        'env',
        'udp',
        'ssm',
        'imc',
        'pid',
        'port',
        'channelid',
        'source_ip',
        'created_at',
        'updated_at',
        'deleted_at',
        'source_name',
        'valid_as_of',
        'ffmpegsource',
        'source_stream_guid',
    ];

    public function getValidAsOfAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setValidAsOfAttribute($value)
    {
        $this->attributes['valid_as_of'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
