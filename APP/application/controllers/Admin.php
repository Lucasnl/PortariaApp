<?php
Class Admin extends CI_Controller {
	
	function __construct(){
		
		parent::__construct();
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->model('My_model');
	$this->load->library('session');
	
	if($this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}
	}
	function index() {
		
		$this->load->view('ItemCrud');
}
}