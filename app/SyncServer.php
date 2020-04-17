<?php

namespace App;

use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SyncServer extends Model
{
    use SoftDeletes;

    protected $hidden = [
        'password',
        'advanced_password',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'host_ip',
        'country',
        'password',
        'cs_token',
        'timezone',
        'host_url',
        'username',
        'hls_shift',
        'updated_at',
        'created_at',
        'server_url',
        'enable_evt',
        'deleted_at',
        'report_time',
        'clip_db_url',
        'server_type',
        'report_email',
        'enable_excel',
        'server_redirect',
        'show_clip_button',
        'show_live_button',
        'advanced_password',
        'video_server_type',
        'advanced_username',
        'enable_evt_timing',
        'show_group_button',
        'transcoding_server',
        'show_channel_button',
        'max_upload_filesize',
        'filter_preset_for_ui',
        'millisecond_precision',
        'basic_discovery_enabled',
        'max_days_channel_history',
        'real_time_notification_url',
        'continuous_discovery_enabled',
    ];

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function setAdvancedPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['advanced_password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }
}
