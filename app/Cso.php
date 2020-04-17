<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cso extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'host_b',
        'host_a',
        'deleted_at',
        'updated_at',
        'created_at',
        'host_a_port',
        'host_b_port',
        'use_default_a',
        'use_default_b',
        'channel_server_id',
        'use_sync_server_for_b',
        'use_aggragation_for_a',
        'use_aggragation_for_b',
        'use_sync_server_for_a',
        'select_sync_server_a_id',
        'use_channel_server_localhost',
        'channel_server_input_source_id',
    ];

    public function channel_server_input_source()
    {
        return $this->belongsTo(Csi::class, 'channel_server_input_source_id');
    }

    public function select_sync_server_a()
    {
        return $this->belongsTo(SyncServer::class, 'select_sync_server_a_id');
    }

    public function channel_server()
    {
        return $this->belongsTo(ChannelServer::class, 'channel_server_id');
    }
}
