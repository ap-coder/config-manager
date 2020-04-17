<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1553537342617ChannelServersTable extends Migration
{
    public function up()
    {
        Schema::create('channel_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('host_url')->nullable();
            $table->string('host_ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('channel_servers');
    }
}
