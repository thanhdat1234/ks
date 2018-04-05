<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->text('flash'); //0 logo text 1 logo images
            $table->text('phones'); //multi number phone <hotline>
            $table->text('social');
            //eg:
            /*
             {
                'facebook':{
                    'icon' : '',
                    'link' : '',
                    'footer':1 or 0,
                    'top':1 or 0,
                    message : 1 or 0
                },
                'youtube':{
                    'icon' : '',
                    'link' : '',
                    'footer':1 or 0,
                    'top':1 or 0
                },
                'google':{
                    'icon' : '',
                    'link' : '',
                    'footer':1 or 0,
                    'top':1 or 0
                }
             }

              */
            $table->text('seo');
            /*
             * {
             *      'title':'',
             *      'keywords':'',
             *      'descriptions':'',
             *      ...
             * }
             */
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
