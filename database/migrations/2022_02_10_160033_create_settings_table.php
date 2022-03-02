<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */



    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_id')->unique();
            $table->string('city_id');
            $table->string('city');
            $table->string('description', 600);
            $table->string('short_des');
            $table->string('photo');
            $table->string('logo');
            $table->string('address');
            $table->string('email_for_clients');
            $table->string('commercial_email');
            $table->string('default_phone');
            $table->string('additional_phone');
            $table->string('working_time');
            $table->string('vk');
            $table->string('instagramm');
            $table->string('youtube');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
