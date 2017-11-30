<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaCorrida_Model extends My_Model {
	protected $table = 'corrida';
	
	public function __construct(){
		parent::__construct();
		 
		}


	public function getAll()
	{
		$query = $this->db->get($this->table);
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}	
	}

	/*public function getAllMotorista()
	{
		$query = $this->db->get('motorista');
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}
	
	}

	public function getAllPassageiro()
	{
		$query = $this->db->get('passageiro');
		
		$result = $query->result();

		if ($query->num_rows()>0){
			return $result;
		}else{
			return null;
		}
	
	}*/

}