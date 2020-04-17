<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Csi extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'protocol',
        'move_path',
        'channel_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'use_qa_channels',
        'use_dev_channels',
        'channel_server_id',
        'use_beta_channels',
        'use_production_channels',
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class, 'channel_id');
    }

    public function channel_server()
    {
        return $this->belongsTo(ChannelServer::class, 'channel_server_id');
    }
}
