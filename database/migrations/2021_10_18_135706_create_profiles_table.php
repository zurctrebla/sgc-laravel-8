<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('house');
            $table->string('vehicle_main')->nullable();
            $table->string('vehicle_two')->nullable();
            $table->string('vehicle_three')->nullable();
            $table->integer('phone_main')->nullable();
            $table->integer('phone_two')->nullable();
            $table->integer('phone_three')->nullable();
            $table->enum('status', ['own', 'rent']);
            $table->timestamps();

            $table->foreign('user_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
