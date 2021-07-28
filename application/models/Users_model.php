<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function login($email, $password){
			$pass=md5($password);
			$query = $this->db->get_where('users', array('email'=>$email, 'password'=>$pass));
			return $query->row_array();
		}


	public function cart_sub($data){

		$dish = array('$data');

			$query = $this->db->get_where('products', array('pro_id'=>$data));
			//$query = $this->db->where('products', array('pro_id'=>$dish));

		return $query->row_array();
		}
	
		
		
	}?>