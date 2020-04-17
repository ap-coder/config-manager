<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553628743596ChannelServersTable extends Migration
{
    public function up()
    {
        Schema::table('channel_servers', function (Blueprint $table) {
            $table->string('token')->nullable();
        });
    }

    public function down()
    {
        Schema::table('channel_servers', function (Blueprint $table) {
            $table->dropColumn('token');
        });
    }
}
