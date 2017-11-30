<?php
class Edita_Motorista extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('EditaMotorista_Model','Edita_Motorista');
			}



	public function index()	{
		$this->load->view('incs/header');
		$this->load->view('edita_motorista.php');
		$this->load->view('incs/footer');	
	}

	public function save(){
		$this->load->model('EditaMotorista_Model','Edita_Motorista');	

		

		$data = array('id_motorista' => $this->input->post('id_motorista'),
						'nm_motorista' => $this->input->post('nm_motorista'),
						'dtnasc_motorista' => $this->input->post('dtnasc_motorista'),
						'cpf_motorista' => $this->input->post('cpf_motorista'),
						'mod_carro' => $this->input->post('mod_carro'),
						'status' => $this->input->post('status'),
						'sexo_motorista' => $this->input->post('sexo_motorista')
						
						
					);

		
		$this->Edita_Motorista->save($data, array('id' => $this->input->post('id')) );
		
		redirect(base_url('sucesso'), $this->data );
	

		}


 
       
    }
    
  

