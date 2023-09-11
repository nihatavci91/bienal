<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title_tr');
            $table->string('title_en');
            $table->text('description_tr')->nullable(false);
            $table->text('description_en')->nullable(false);
            $table->text('address')->nullable(false);
            $table->text('tel')->nullable(false);
            $table->text('map')->nullable(false);
            $table->text('email')->nullable(false);
            $table->text('image_url');
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
        Schema::dropIfExists('about_us');
    }
}
