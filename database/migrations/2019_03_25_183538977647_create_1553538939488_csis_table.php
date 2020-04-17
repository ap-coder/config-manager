<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1553538939488CsisTable extends Migration
{
    public function up()
    {
        Schema::create('csis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('protocol')->nullable();
            $table->string('move_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('csis');
    }
}
