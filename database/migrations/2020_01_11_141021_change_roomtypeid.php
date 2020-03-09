<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeRoomtypeid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_room_type', function (Blueprint $table) {
           
            $table->bigIncrements('room_type_id')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_room_type', function (Blueprint $table) {
            $table->string('room_type_id')->unsigned()->change();
        });
    }
}
