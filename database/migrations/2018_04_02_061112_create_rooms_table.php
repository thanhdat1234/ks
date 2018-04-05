<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('zooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('price');
            $table->string('sale');
            $table->text('content');
            $table->text('images');
            $table->integer('status',false,false)->defaul(1);
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
        //
    }
}
