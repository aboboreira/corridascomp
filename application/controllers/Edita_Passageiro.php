<?php
class Edita_Passageiro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('EditaPassageiro_Model','Edita_Passageiro');
			}



	public function index()	{
		$this->load->view('incs/header');
		$this->load->view('Edita_Passageiro.php');
		$this->load->view('incs/footer');	
	}

	public function save(){
		$this->load->model('EditaPassageiro_Model','Edita_Passageiro');	

		

		$data = array('id_passageiro' => $this->input->post('id_passageiro'),
						'nm_passageiro' => $this->input->post('nm_passageiro'),
						'dtnasc_passageiro' => $this->input->post('dtnasc_passageiro'),
						'cpf_passageiro' => $this->input->post('cpf_passageiro'),
						'sexo_passageiro' => $this->input->post('sexo_passageiro')
						
						
					);

		
		$this->Edita_Passageiro->save($data, array('id_passageiro' => $this->input->post('id_passageiro')) );
		
		redirect(base_url('sucesso'), $this->data );

		}


 
       
    }
    
  

