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
	public function procesa()
	{
		$query = ''; //declaramos para evitar advertencias de PHP
		$nombre = $this->input->post('Nombres', TRUE);
		$sql= "insert into maestra(nombres) values('$nombre')  ";
		$query = $this->db->query($sql, array($query));
		redirect('/controlador/formulario', 'refresh'); //redirecciona para seguir insertando
 	}
	public function procesar()
	{
		$query = ''; //declaramos para evitar advertencias de PHP
		$apellidos = $this->input->post('Apellidos', TRUE);
		$sql= "insert into maestra(apellidos) values('$apellidos')  ";
		$query = $this->db->query($sql, array($query));
		redirect('/controlador/formulario', 'refresh'); //redirecciona para seguir insertando
 	}
	public function proces()
	{
		$query = ''; //declaramos para evitar advertencias de PHP
		$edad = $this->input->post('Edad', TRUE);
		$sql= "insert into maestra(edad) values('$edad')  ";
		$query = $this->db->query($sql, array($query));
		redirect('/controlador/formulario', 'refresh'); //redirecciona para seguir insertando
 	}
	public function proce()
	{
		$query = ''; //declaramos para evitar advertencias de PHP
		$fecha = $this->input->post('Fecha_Nacimiento', TRUE);
		$sql= "insert into maestra(fecha_nacimiento) values('$fecha')  ";
		$query = $this->db->query($sql, array($query));
		redirect('/controlador/formulario', 'refresh'); //redirecciona para seguir insertando
 	}
	public function pro()
	{
		$query = ''; //declaramos para evitar advertencias de PHP
		$celular = $this->input->post('Celular', TRUE);
		$sql= "insert into detalle(celular) values('$celular')  ";
		$query = $this->db->query($sql, array($query));
		redirect('/controlador/formulario', 'refresh'); //redirecciona para seguir insertando
 	}

 	 public  function reporte_master()
	 {
		$data='';
		$query2=''; 
		$sql2= "select * from maestra order by id_estudiante desc limit 100";
		$query2 = $this->db->query($sql2, array($query2));
		$data['mix']=$query2->result_array();
       		$this->load->view('reporte', $data);
	 }
	public function validar()
	{
		if(isset($_POST['Enviar'])) {
			require("Welcome.php");
		}
	}


	
}
