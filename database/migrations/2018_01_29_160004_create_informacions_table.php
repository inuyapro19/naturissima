<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_empresa',75)->nullable();
            $table->string('email',75)->nullable(); 
            $table->string('direccion',150)->nullable();
            $table->string('telefono1',15)->nullable();
            $table->string('telefono2',15)->nullable();
            $table->string('nombre_facebook',100)->nullable();
            $table->string('url_facebook',250)->nullable();           
            $table->text('mapa')->nullable();
            $table->text('texto_footer')->nullable();
            $table->text('quienes_somos')->nullable();
            $table->string('imagen_quienes_somos')->default('imagen.jpg');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('informacions');
    }
}
