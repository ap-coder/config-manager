<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1553538584477ChannelsTable extends Migration
{
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source_name')->nullable();
            $table->string('channelid')->nullable();
            $table->string('env')->nullable();
            $table->string('source_ip')->nullable();
            $table->string('udp')->nullable();
            $table->string('ffmpegsource')->nullable();
            $table->string('ssm')->nullable();
            $table->string('imc')->nullable();
            $table->string('port')->nullable();
            $table->string('pid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
