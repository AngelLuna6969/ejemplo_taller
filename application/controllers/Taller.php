<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function __construct() //asi se hace un constructor en php "__construct lleva dos guines bajos"
	{
		//Hereda los metodos de la super clase CI_Controller
		parent::__construct();

		//Agregar helpers y librerias adicionales al controlador
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function primer_vista(){
		$this->load->view('Taller/index_view');
	}

	public function agregar_taller(){
		$this->load->view('Taller/agregar_taller_view');
	}

	public function plantilla(){
		$this->load->view('Taller/plantilla_view');
	}
}
