<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1553536987772SyncServersTable extends Migration
{
    public function up()
    {
        Schema::create('sync_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('host_url')->nullable();
            $table->string('host_ip')->nullable();
            $table->string('transcoding_server')->nullable();
            $table->string('max_upload_filesize')->nullable();
            $table->time('report_time')->nullable();
            $table->string('report_email')->nullable();
            $table->integer('max_days_channel_history')->nullable();
            $table->string('server_type')->nullable();
            $table->string('real_time_notification_url')->nullable();
            $table->boolean('basic_discovery_enabled')->default(0)->nullable();
            $table->boolean('continuous_discovery_enabled')->default(0)->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('advanced_username')->nullable();
            $table->string('advanced_password')->nullable();
            $table->boolean('millisecond_precision')->default(0)->nullable();
            $table->boolean('show_channel_button')->default(0)->nullable();
            $table->boolean('show_clip_button')->default(0)->nullable();
            $table->boolean('show_group_button')->default(0)->nullable();
            $table->boolean('show_live_button')->default(0)->nullable();
            $table->boolean('enable_evt')->default(0)->nullable();
            $table->boolean('enable_excel')->default(0)->nullable();
            $table->boolean('enable_evt_timing')->default(0)->nullable();
            $table->string('timezone')->nullable();
            $table->string('filter_preset_for_ui')->nullable();
            $table->string('country')->nullable();
            $table->string('video_server_type')->nullable();
            $table->string('server_url')->nullable();
            $table->string('server_redirect')->nullable();
            $table->integer('hls_shift')->nullable();
            $table->string('clip_db_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sync_servers');
    }
}
