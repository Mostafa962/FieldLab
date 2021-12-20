<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('home_title')->nullable();
            $table->string('home_cover')->nullable();
            $table->longText('home_description')->nullable();
            $table->string('address')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('about_cover')->nullable();
            $table->longText('about_p1')->nullable();
            $table->longText('about_p2')->nullable();
            $table->longText('about_p3')->nullable();
            $table->longText('about_p4')->nullable();
            $table->string('about_img1')->nullable();
            $table->string('about_img2')->nullable();
            $table->string('about_img3')->nullable();
            $table->string('about_img4')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
