<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_id');
            $table->string('image');
            $table->integer('user_id');
            $table->string('price');
            $table->string('description');
            $table->string('address');
            $table->string('baths');
            $table->string('beds');
            $table->string('sqft');
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
        Schema::dropIfExists('saved_properties');
    }
}