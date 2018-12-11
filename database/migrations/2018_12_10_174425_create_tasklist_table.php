<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasklistTable extends Migration
{

    public function up()
    {
        Schema::create('tasklists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente');
            $table->string('titulo')->nullable();
            $table->text('tarefa')->nullable();
            $table->boolean('ativo');
            $table->enum('estado',['nova','adiada','trabalhando','concluida','cancelada']);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('vista')->nullable();
            $table->timestamp('cancelada')->nullable();
            $table->timestamp('adiada')->nullable();
            $table->timestamp('concluida')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('tasklist');
    }
}
