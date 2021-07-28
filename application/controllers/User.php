<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
		        $this->load->library('session');
}
public function reg_view(){
$this->load->view("register.php");
}
	public function register_user(){
      $user=array(
       'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password')),
       'fname'=>$this->input->post('fname'),
		'mob'=>$this->input->post('mob')
        );
      $this->db->insert('users',$user);

		
if($user)
{	$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/index');
	}
}
	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('home');
		}
		else{
			$this->load->view('login_page');
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['email'];
		$password = $_POST['password'];

		$data = $this->users_model->login($email, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			redirect('home');
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}

	public function home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('home');
		}
		else{
			redirect('/');
		}
		
	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}

	public function cart_sub(){
		if(!empty($_POST['dish'])){
		$dish = implode(',',$_POST['dish']);
		$data = $this->users_model->cart_sub($dish);
		if($data){
			$this->session->set_userdata('id', $data);
			$this->load->view('cartsub');
		}	}else{
			$this->load->view('home');}
}
	public function invoice(){
      $invoice=array(
       'p_id'=>$this->input->post('pro_id'),
       'c_id'=>$this->input->post('c_id'),
		'c_name'=>$this->input->post('fname'),
		  'p_name'=>$this->input->post('pname'),
       'subtotal'=>$this->input->post('tot'), );
      $this->db->insert('invoice',$invoice);
	if($invoice)
{	$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('/');

}
}

	public function invoicelist(){
		
		$this->load->view('invoicelist');
		}}