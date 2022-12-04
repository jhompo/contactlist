<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();            
            $table->string('nombre',50);
            $table->string('apellidos',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('telefono',30)->nullable();
            $table->char('genero')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion',100)->nullable();
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_origen');
            $table->foreign('id_tipo')->references("id")->on("tipos");
            $table->foreign('id_origen')->references("id")->on("origens");
            //$table->mediumText('comment');

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
        Schema::dropIfExists('contacts');
    }
}
