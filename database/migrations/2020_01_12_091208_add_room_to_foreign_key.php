<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoomToForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room', function (Blueprint $table) {
            $table->foreign('room_type_id')->references('room_type_id')->on('_room_type')->onDelete('cascade');
            $table->foreign('room_status_id')->references('room_status_id')->on('roomstatus')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room', function (Blueprint $table) {
            $table->dropForeign('room_type_id');
            $table->dropForeign('room_status_id');
        });
    }
}
