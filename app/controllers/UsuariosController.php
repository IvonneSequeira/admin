<?php

class UsuariosController extends BaseController
{
	protected $layout='layouts.master';
	function Registrar()
	{
		$oficinas =DB::table('tbl_oficinas')->orderBy('oficina')->lists('oficina','id');
		$this ->layout->modulo =view::make('usuarios.registrar', array('oficinas'=>$oficinas));
	}

	function registrar_db(){
		/*DB::table('tbl_usuarios')->insert(array(
			'id_oficina'=>Input::get('id_oficina'),
			'id_rol'    =>2, 
			'id_status' =>1,
			'created_at'=>date('Y-m-d H:i:s'),//con eloquen esto ya no es necesario
			'email'     => Input::get('email'),
			'password' => md5(Input::get('password')),
			'nombre'   => Input::get('nombre'),
			'apellido' => Input::get('apellido'),

			));*/

$usuarios =new UsuariosModel;
$usuarios->id_oficina= Input::get('id')
$usuarios->id_rol=2,
$usuarios->id_status=1,
$usuarios->email=Input::get('email'),
$usuarios->password=md5(Input::get('password')),
$usuarios->nombre=Input::get('nombre'),
$usuarios->apellido=Input::get('apellido');

$usuarios->save();

	}
}
?>