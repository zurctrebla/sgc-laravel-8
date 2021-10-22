<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nacionality');
            $table->string('state');
            $table->date('birth');
            $table->string('cpf')->unique;
            $table->string('rg')->unique;
            $table->string('block');
            $table->string('lot');
            $table->string('house');
            // $table->enum('type', ['propria', 'alugada', 'temporada']);    //  acrescentada
            // $table->integer('occupants');                      //  acrescentada
            // protected $fillable = ['user_id', 'nacionality', 'state', 'birth', 'cpf', 'rg', 'block', 'lot', 'house'];
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complements');
    }
}
