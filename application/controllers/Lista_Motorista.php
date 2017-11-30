<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_Motorista extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('ListaMotorista_Model','Lista_Motorista');
			}

	public function index()
	{
		$this->load->model('ListaMotorista_Model','Lista_Motorista');

		$this->data['data'] = $this->Lista_Motorista->getAll();

		$this->load->view('incs/header');
		$this->load->view('lista_motorista' , $this->data );
		$this->load->view('incs/footer');
	}

	public function alterar(){

		$this->load->model('ListaMotorista_Model','Lista_Motorista');
		$id_motorista = $this->input->post('id_motorista');		
		$nm_motorista = $this->input->post('nm_motorista');
		$cpf_motorista = $this->input->post('cpf_motorista');
		$dtnasc_motorista = $this->input->post('dtnasc_motorista');
		$sexo_motorista = $this->input->post('sexo_motorista');
		$mod_carro = $this->input->post('mod_carro');
		$status = $this->input->post('status');

		
		//var_dump($this->input->post);

		$data = array(
			'id_motorista' => $id_motorista,
			'nm_motorista' => $nm_motorista,
			'cpf_motorista' => $cpf_motorista,
			'dtnasc_motorista' => $dtnasc_motorista,
			'sexo_motorista' => $sexo_motorista,
			'mod_carro' => $mod_carro,
			'status' => $status
		);

		$this->Lista_Motorista->save( $data, array('id_motorista' => $id_motorista) );

		
	}

	

}
