<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553628812850SyncServersTable extends Migration
{
    public function up()
    {
        Schema::table('sync_servers', function (Blueprint $table) {
            $table->string('cs_token')->nullable();
        });
    }

    public function down()
    {
        Schema::table('sync_servers', function (Blueprint $table) {
            $table->dropColumn('cs_token');
        });
    }
}
