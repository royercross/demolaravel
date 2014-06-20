<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatos', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('pagina_web');
            $table->string('descripcion');
            $table->enum('tipo_trabajo',['Tiempo Completo','Parcial','Freelancer']);
            $table->integer('categoria_id')->unsigned();
            $table->boolean('disponible');
            $table->string('slug');

            $table->foreign('categoria_id')->references('id')->on('categorias');

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
		Schema::drop('candidatos');
	}

}
