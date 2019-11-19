<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ItemCRUD extends CI_Controller {


   public $itemCRUD;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('ItemCRUDModel');


      $this->itemCRUD = new ItemCRUDModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->itemCRUD->get_itemCRUD();

 if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}
       $this->load->view('theme/header');       
       $this->load->view('itemCRUD/list',$data);
       $this->load->view('theme/footer');
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
    $item = $this->itemCRUD->find_item($id);
 if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}

      $this->load->view('theme/header');
      $this->load->view('ItemCRUD/show',array('item'=>$item));
      $this->load->view('theme/footer');
   }


   public function create()
   {
	    if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}
      $this->load->view('theme/header');
      $this->load->view('itemCRUD/create');
	  
      $this->load->view('theme/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   
   
   public function webcam(){
	
 if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}
     $this->itemCRUD->insert_webcam();


}

 public function upwebcam(){
	
 if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}
     $this->itemCRUD->insert_webcam();


}

// Return image url
	  
   
   public function store()
   {
        $this->form_validation->set_rules('Nome', 'Nome', 'required');
        $this->form_validation->set_rules('Telefone', 'Telefone', 'required');
            
	    $this->form_validation->set_rules('CPF', 'CPF', 'trim|required|is_unique[dados.CPF]');
	


        if ($this->form_validation->run() == FALSE){
			
			
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/create'));
        }else{
           $this->itemCRUD->insert_item();
		   $this->itemCRUD->insert_webcam();
           redirect(base_url('itemCRUD'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
	    if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}
	   
	   
       $item = $this->itemCRUD->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('itemCRUD/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }
   
   
      public function liberar($id)
   {
	    if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}
	   
	   
       $item = $this->itemCRUD->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('itemCRUD/liberar',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('Nome', 'Nome', 'required');
         $this->form_validation->set_rules('CPF', 'CPF', 'required');
        $this->form_validation->set_rules('Telefone', 'Telefone', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/edit/'.$id));
        }else{ 
          $this->itemCRUD->update_item($id);

          redirect(base_url('itemCRUD'));
        }
   }
   
   
   
   
     public function liberacao($id)
   {
      
   if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}

          $this->itemCRUD->liberar_item($id);

          redirect(base_url('itemCRUD'));
        }
		
		
		
		public function saida($id)
   {
      
   if($this->session->userdata('level')!="Member" && $this->session->userdata('level')!="Admin") {
	redirect('Entrar');
	
	}

          $this->itemCRUD->saida_item($id);

          redirect(base_url('itemCRUD'));
        }
   


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
	   
       $item = $this->itemCRUD->delete_item($id);
       redirect(base_url('itemCRUD'));
   }
}