<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_abouts', function (Blueprint $table) {
            $table->id();

            $table->string('coy_name')->nullable();
            $table->string('title')->nullable();
            $table->text('content_long')->nullable();
            $table->text('content_short')->nullable();

            $table->text('coy_yr_exp')->nullable();
            $table->text('yr_founded')->nullable();

            $table->string('about_image')->nullable();

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
        Schema::dropIfExists('home_abouts');
    }
};
