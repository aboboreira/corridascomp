<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaMotorista_Model extends My_Model {
	protected $table = 'motorista';
	
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

}