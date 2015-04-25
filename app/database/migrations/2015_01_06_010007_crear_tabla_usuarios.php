<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_usuarios', function(Blueprint $table)
		{
			$table -> increments ('id');
			//ref oficinas
			$table ->unsignedInteger('id_oficina');
			$table ->foreign ('id_oficina') -> references ('id') -> on ('tbl_oficinas');

			//ref tbl_roles
			$table ->unsignedInteger('id_rol');
			$table ->foreign ('id_rol') -> references ('id') -> on ('tbl_roles');

			//ref tbl_estados
			$table ->unsignedInteger('id_status');
			$table ->foreign ('id_status') -> references ('id') -> on ('tbl_estados');

			//fecha y hora de creacion
			$table ->timestamps();

			//email
			$table ->string('email',62);

			//pass
			$table ->string ('password',32);

			

			//nombre y apellido
			$table ->string('nombre',30);
			$table ->string ('apellido',30);


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_usuarios');
	}

}
