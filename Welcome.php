<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data='';
		$this->load->view('formulario',$data);
	}
	public function  registro()
	{
		$nombres=$_POST['Nombres'];
		$apellidos=$_POST['Apellidos'];
		$Edad=$_POST['Edad'];
		$fecha_nacimiento=$_POST['Fecha_nacimiento'];
		$celular=$_POST['Celular'];
		$reqlen=strlen($nombres)*strlen($apellidos)*strlen($edad)*strlen($fecha_nacimiento)*strlen($celular);
		if ($reqlen>0){
			require("conectar.php");
			mysql_query("INSERT INTO maestra VALUES('$nombre','$apellidos','$Edad','$fecha_nacimiento')");
			mysql_query("INSERT INTO detalle VALUES('$celular')");
			mysql_close($link);
			echo 'Registro Exitoso';
			}
		else {
		echo 'Registrese nuevamente';
		}
	}
	
}
>?
