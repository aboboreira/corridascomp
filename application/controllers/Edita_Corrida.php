<?php
class Edita_Corrida extends CI_Controller {

	public function __construct(){
		parent::__construct();
			
			}



	public function index()	{
		

		$this->load->model('EditaCorrida_Model','Edita_Corrida');
		

		$this->data['motorista'] = $this->Edita_Corrida->getAllMotorista();
		$this->data['passageiro'] = $this->Edita_Corrida->getAllPassageiro();

		$this->load->view('incs/header');
		$this->load->view('edita_corrida.php', $this->data);
		$this->load->view('incs/footer');
	}

	public function save(){
		$this->load->model('EditaCorrida_Model','Edita_Corrida');	

		

		$data = array('id_corrida' => $this->input->post('id_corrida'),
						'nm_motorista' => $this->input->post('nm_motorista'),
						'nm_passageiro' => $this->input->post('nm_passageiro'),
						'vl_corrida' => $this->input->post('vl_corrida')						
						
						
					);

		
		$this->Edita_Corrida->save($data, array('id' => $this->input->post('id')) );
		
		redirect(base_url('sucesso'), $this->data );

		}


 
       
    }
    
  

