<?php


class ItemCRUDModel extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('Nome', $this->input->get("search"));
          $this->db->like('CPF', $this->input->get("search"));
          $this->db->or_like('Telefone', $this->input->get("search")); 
        }
        $query = $this->db->get("dados");
        return $query->result();
    }


    public function insert_item()
    {    
	


        $data = array(
            'Nome' => $this->input->post('Nome'),
            'Telefone' => $this->input->post('Telefone'),
            'CPF' => $this->input->post('CPF'),
            'bairro' => $this->input->post('bairro'),
            'rua' => $this->input->post('rua'),
            'cep' => $this->input->post('cep'),
            'uf' => $this->input->post('uf'),
            'cidade' => $this->input->post('cidade'),
            'Empresa' => $this->input->post('Empresa'),

        );
	

	
return $this->db->insert('dados', $data);
   
    




	
	
	}
	
public function insert_webcam (){

// new filename


$timezone  = -4; 
$data=gmdate("dmYHis", time() + 3600*($timezone+date("I"))); 

$filename = $data.'.jpeg';



$cpf=$this->input->post('CPF');


$encoded_data = $_POST['mydata'];
$imageDir='upload/';

    $encoded_data = trim($encoded_data);
    $encoded_data = str_replace('data:image/png;base64,', '', $encoded_data);
    $encoded_data = str_replace('data:image/jpg;base64,', '', $encoded_data);
    $encoded_data = str_replace('data:image/jpeg;base64,', '', $encoded_data);
    $encoded_data = str_replace('data:image/gif;base64,', '', $encoded_data);
    $encoded_data = str_replace(' ', '+', $encoded_data);

    $imageData = base64_decode($encoded_data);
    $filePath = $imageDir . $filename;


   file_put_contents($filePath,$imageData);

$this->db->where('CPF',$cpf);
$this->db->set('Foto',$imageData);

 $query = $this->db->update('dados');







}

public function update_webcam($id){
	
	
	$connect = mysqli_connect("127.0.0.1:53626", "azure", "6#vWHD_$", "cadastro");  

	$filename = date('YmdHis').'.jpeg';
	$cpf=$_POST['CPF'];
	
	 if($id==0){

$queryupdate ="UPDATE dados SET Foto =('$filename') WHERE CPF=('$cpf')";
$resultUpdate = mysqli_query($connect, $queryupdate);
        }
		
		else{
$queryupdate2 ="UPDATE dados SET Foto =('$filename') WHERE CPF=('$cpf')";
$resultUpdate2 = mysqli_query($connect, $queryupdate2);
        }        
	
	


$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
 $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
 
 
 

}





echo $url;


}
	





    public function update_item($id) 
    {
        $data=array(
            'Nome' => $this->input->post('Nome'),
            'Telefone' => $this->input->post('Telefone'),
            'CPF' => $this->input->post('CPF'),
		    'bairro' => $this->input->post('bairro'),
            'rua' => $this->input->post('rua'),
            'cep' => $this->input->post('cep'),
            'uf' => $this->input->post('uf'),
            'cidade' => $this->input->post('cidade'),
            'Empresa' => $this->input->post('Empresa'),
            'Motivo' => $this->input->post('Motivo'),
            'DataSaida' => $this->input->post('DataSaida'),
         
          
        );
        if($id==0){
            return $this->db->insert('dados',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('dados',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('dados', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('dados', array('id' => $id));
    }
	
	
public function liberar_item($id){
$timezone  = -4; 

$falar=$this->input->post('falar');
$data=gmdate("d/m/Y H:i:s", time() + 3600*($timezone+date("I"))); 
   
   $datae=$this->input->post('DataEntrada');
	$data2=array(
            'DataEntrada' => $this->input->post('DataEntrada'),
			);

 if($id==0){
            return $this->db->insert('dados',$data);
            return $this->db->insert('dados',$falar);
        }else{
        $this->db->where('id',$id);
        $this->db->set('DataEntrada', "CONCAT(DataEntrada,',','".$data."')", FALSE); 
        $query = $this->db->update('dados');
		

$this->db->where('id',$id);
$this->db->set('Motivo', "CONCAT(Motivo,',','".$falar."')", FALSE); 
$query = $this->db->update('dados');
		
		
        }        
    



}


public function saida_item($id){
$timezone  = -4; 


$data=gmdate("d/m/Y H:i:s", time() + 3600*($timezone+date("I"))); 
   
   $datae=$this->input->post('DataSaida');
	$data2=array(
            'DataSaida' => $this->input->post('DataSaida'),
			);

 if($id==0){
            return $this->db->insert('dados',$data);
        }else{
        $this->db->where('id',$id);
        $this->db->set('DataSaida', "CONCAT(DataSaida,',','".$data."')", FALSE); 
        $query = $this->db->update('dados');
        }        
    

}


}

?>