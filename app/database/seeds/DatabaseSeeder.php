<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'Contabilidad'));
	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'Recursos Humanos'));
	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'Planillas'));
	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'Informatica'));
	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'Compras'));
	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'ventas'));
	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'Cuentas por pagar'));
	DB:: table('tbl_oficinas')->insert (array ('oficina' =>'Cuentas por cobrar'));

	$this ->command -> info ('oficinas sembradas en la tabla :tbl_oficinas han sido 8');

	//roles
	DB:: table('tbl_roles')->insert (array ('rol' =>'Administrador'));
	DB:: table('tbl_roles')->insert (array ('rol' =>'Usuario'));

	$this ->command -> info ('roles sembradas en la tabla :tbl_roles han sido 2');

	//estados
	DB:: table('tbl_estados')->insert (array ('estado' =>'Desactivado'));
	DB:: table('tbl_estados')->insert (array ('estado' =>'Activado'));
	DB:: table('tbl_estados')->insert (array ('estado' =>'Eliminado'));

	$this ->command -> info ('estados sembradas en la tabla :tbl_estados han sido 3');



	}

}
