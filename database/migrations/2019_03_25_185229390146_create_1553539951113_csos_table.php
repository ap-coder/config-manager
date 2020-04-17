<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1553539951113CsosTable extends Migration
{
    public function up()
    {
        Schema::create('csos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('use_channel_server_localhost')->default(0)->nullable();
            $table->boolean('use_default_a')->default(0)->nullable();
            $table->string('host_a')->nullable();
            $table->string('host_a_port')->nullable();
            $table->boolean('use_default_b')->default(0)->nullable();
            $table->string('host_b')->nullable();
            $table->string('host_b_port')->nullable();
            $table->boolean('use_aggragation_for_a')->default(0)->nullable();
            $table->boolean('use_aggragation_for_b')->default(0)->nullable();
            $table->boolean('use_sync_server_for_a')->default(0)->nullable();
            $table->unsignedInteger('select_sync_server_a_id')->nullable();
            $table->foreign('select_sync_server_a_id')->references('id')->on('sync_servers');
            $table->boolean('use_sync_server_for_b')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('csos');
    }
}
