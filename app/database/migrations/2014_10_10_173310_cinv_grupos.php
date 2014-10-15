<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CinvGrupos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('inv_tipo_grupos', function($tabla){

			 $tabla ->increments('id_tipo_grupo');
			 $tabla ->text('nombre_grupo');

		});

		Schema::create('inv_grupos', function($tabla){

			 $tabla ->increments('codigo_grupo');
			 $tabla ->integer('inv_tipo_grupo_id')->unsigned();
			 $tabla ->text('nombre_grupo');
			 $tabla ->string('lider_grupo',100);
			 $tabla ->string('unidad_academica',100);
			 $tabla ->text('descripcion');
			 $tabla ->string('categoria',30)-> nullable(); 
			 $tabla ->string('email',100);
			 $tabla ->string('telefono',20);
			 $tabla ->text('pagina_web');
			 $tabla ->text('direccion_grupo');
			 $tabla ->text('archivo_afiche') -> nullable();
			 $tabla ->text('link_gruplac') -> nullable();
			 $tabla ->date('ano_creacion') -> nullable();
			 $tabla ->text('foto1') -> nullable();
			 $tabla ->text('foto2') -> nullable();
			
			 //$tabla ->primary('codigo_grupo');
			 $tabla ->foreign('inv_tipo_grupo_id')->references('id_tipo_grupo')->on('inv_tipo_grupos');
	});
}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_grupos');
		Schema::drop('inv_tipo_grupos');
		
	}

}
