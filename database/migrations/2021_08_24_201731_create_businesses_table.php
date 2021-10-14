<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('metro_station_id')->constrained();
            $table->foreignId('object_type_id')->constrained();

            $table->string('name');
            $table->unsignedMediumInteger('price')->default(0);
            $table->string('coords')->nullable();


            $table->text('description')->nullable();
            $table->text('full_description')->nullable();
            $table->string('org_form')->nullable();
            $table->string('square')->nullable();
            $table->string('ownership_type')->nullable();
            $table->string('rents')->nullable();
            $table->string('shares_sold')->nullable();
            $table->boolean('with_license')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
