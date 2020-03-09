<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->text('email');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('room_type');
            $table->integer('room_quantity');
            $table->integer('adult');
            $table->string('confirm')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
