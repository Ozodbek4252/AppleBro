<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('media_type')->nullable();
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('description_uz')->nullable();
            $table->string('description_ru')->nullable();
            $table->string('description_en')->nullable();
            $table->string('image');
            $table->string('product_id')->nullable();
            $table->timestamps();
        });
    }

    /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
};