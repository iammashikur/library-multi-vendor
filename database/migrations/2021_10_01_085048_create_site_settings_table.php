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
            $table->id();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('banner_one')->nullable();
            $table->string('banner_two')->nullable();
            $table->string('banner_three')->nullable();
            $table->string('meta');
            $table->string('tags');
            $table->string('description');
            $table->string('hero_title');
            $table->string('hero_sub_title');

            $table->string('basic_credit');
            $table->string('pro_credit');
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
        Schema::dropIfExists('site_settings');
    }
}
