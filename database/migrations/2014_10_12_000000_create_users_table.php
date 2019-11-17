<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('who')->nullable(); // from 1 - 3 | 1 = staff, 2 = admin, 4 = super admin
            $table->string('unid')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->boolean('email_valid')->nullable();
            $table->boolean('phone_valid')->nullable();
            $table->string('phone')->nullable();
            $table->string('passport')->nullable();
            $table->string('username')->nullable();
            $table->string('address')->nullable();
            $table->string('office')->nullable();
            $table->boolean('active')->nullable();
            $table->string('password')->nullable();
            $table->integer('role_id')->nullable();
            $table->bigInteger('seen_last')->nullable();
            $table->bigInteger('countdown_pass')->nullable();
            $table->string('reset_toke')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
