<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('unid')->nullable();
            $table->text('name')->nullable();
            $table->double('price')->nullable();
            $table->string('location')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('toilet')->nullable();
            $table->string('type')->nullable(); // estate, etc
            $table->text('info')->nullable();
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
