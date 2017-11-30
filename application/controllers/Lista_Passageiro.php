<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_Passageiro extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('ListaPassageiro_Model','Lista_Passageiro');
			}

	public function index()
	{
		$this->load->model('ListaPassageiro_Model','Lista_Passageiro');

		$this->data['data'] = $this->Lista_Passageiro->getAll();

		$this->load->view('incs/header');
		$this->load->view('Lista_Passageiro' , $this->data );
		$this->load->view('incs/footer');
	}

	public function editar(){

		$this->load->model('ListaPassageiro_Model','Lista_Passageiro');
		$id_passageiro = $this->input->post('id_passageiro');		
		$nm_passageiro = $this->input->post('nm_passageiro');
		$cpf_passageiro = $this->input->post('cpf_passageiro');
		$dtnasc_passageiro = $this->input->post('dtnasc_passageiro');
		$sexo_passageiro = $this->input->post('sexo_passageiro');
		

		
		//var_dump($this->input->post);

		$data = array(
			'id_passageiro' => $id_passageiro,
			'nm_passageiro' => $nm_passageiro,
			'cpf_passageiro' => $cpf_passageiro,
			'dtnasc_passageiro' => $dtnasc_passageiro,
			'sexo_passageiro' => $sexo_passageiro
		);

		$this->Lista_Passageiro->save( $data, array('id_passageiro' => $id_passageiro) );

		
	}

	

}
