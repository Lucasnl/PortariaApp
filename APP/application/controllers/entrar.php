<?php
Class Entrar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->model('My_model');
	$this->load->library('session');
	
	}
	function index() {
		$this->load->view('login');
		
	}
	
	
	
	function Confirmalogin(){
	
	$user=$this->input->post('username');
	$pass=$this->input->post('password');
	
	$checklogin=$this->My_model->login($user,$pass);
	
	if($checklogin){
		foreach($checklogin as $row);
		$this->session->set_userdata('username',$row->username);
		$this->session->set_userdata('level',$row->level);
		
		if($this->session->userdata('level')=="Admin"){
		redirect ('itemCRUD');
		
		}elseif($this->session->userdata('level')=="Member"){
			redirect ('itemCRUD');
		}
	}else{
		
		
		echo "<script type='text/javascript'>alert('Usuário ou Senha Inválido');</script>";
		
		
		
		$this->load->view('login');
		
		
		
		}
		
	}
	
	
	
	
	function logout(){
	$this->session->sess_destroy();
	redirect('Entrar');
	
	}
}
	
	
	
	?>