<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_Corrida extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('ListaCorrida_Model','Lista_Corrida');
			}

	public function index()
	{
		$this->load->model('ListaCorrida_Model','Lista_Corrida');

		$this->data['data'] = $this->Lista_Corrida->getAll();

		$this->load->view('incs/header');
		$this->load->view('Lista_Corrida' , $this->data );
		$this->load->view('incs/footer');
	}

	

	

}
