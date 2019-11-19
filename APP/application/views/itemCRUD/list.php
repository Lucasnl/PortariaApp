<div class="row">
    
</div>

<div class="container teste">

<style>
#disabled {
        pointer-events: none;
        cursor: default;
    }
	.img-thumbnail{
		max-width:57%;
	}
	
	#table_id_length{
		float:left;
	}
	#table_id_filter{
		float:right;
	}
	h1{
		text-align:center;
	}
	.teste{
		
		-webkit-box-shadow: 1px 7px 29px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 7px 29px 0px rgba(0,0,0,0.75);
box-shadow: 1px 7px 29px 0px rgba(0,0,0,0.75);
    margin-top: 25px;
	background:white;

	}
	body{
		background:url("./upload/wp.png");
	

	}
	
</style>
<!--<h1 class="display-1">Colégio Divino Salvador </h1>--><div id="cdss"> <img id="cdss" src="./upload/cds.png" width="10%" /></div>
</center>

    <br />
	
	
	
	
	
	
	
	<style>
	
	#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

#logout{
	
	float:right;
}


.container { max-width: 1500px; }


#falar{
  
      width: 81%;

}
#cdss{
  text-align:center;
      margin-top: 20px;

}
a{
  Text-transform :capitalize;
}
</style>
</head>
<body>


	
	
	
	
	
	

            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> <i class="fas fa-plus"></i>  Adicionar </a>
 
  <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
  <thead class="thead-dark">
      <tr>
        
             
          <th>Foto</th>
          <th>Nome</th>
          <th>CPF /RG</th>
          <th>Telefone</th>
		  
		        <th>Última Entrada</th>
		        <th>Motivo</th>
          <th>Última Saida</th>
          <th width="220px">Ação</th>
      </tr>
  </thead>


  <tbody>
  

   <?php foreach ($data as $item) { ?>      
      <tr>
	     
	     <div class="tall">
  
 		 <td width="21%"><img class="img-thumbnail" src= '<?php echo 'data:image/jpeg;base64,'.base64_encode( $item->Foto );?>'></td>

		 </div>
          <td><a href="<?php echo base_url ('itemCRUD/'.$item->id)?>"><?php echo $item->Nome; ?></td></a>
          <td><?php echo $item->CPF;?>    </td>          
          <td><?php echo $item->Telefone; ?></td>          
          
          
          
          <td ><?php  $array = $item->DataEntrada; $arrayEx = explode(",", $array); echo end($arrayEx);  ?></td>          
          <td ><?php  $falarcom = $item->Motivo; $arrayExplodir = explode(",", $falarcom); echo end($arrayExplodir); ?></td>          
       
       
          <td><?php  $array2 = $item->DataSaida; $arrayEx2 = explode(",", $array2); echo end($arrayEx2);?></td>          
      
      <td>
         <!-- <a  class="btn btn-info" href="//<?php echo base_url('itemCRUD/'.$item->id) ?>"><i class="fas fa-eye"></i></a> -->
		  
		  
		 

		
		 <form method ="POST" action="<?php  echo base_url('itemCRUD/liberacao/'.$item->id);?>">		
		

		<input class="form-control form-control-sm" placeholder="Motivo Da Visita" type="text" name="falar" id="falar" required> </input>
		<br/>
		<button class="btn btn-success" type="submit"> <i class="fas fa-door-open"></i> Liberar Entrada </button>
		</form>
		
		  	<br/>
	
	
	<?php 
	
$timezone  = -4; 
 $data=gmdate("d/m/Y", time() + 3600*($timezone+date("I"))); 

$array = $item->DataEntrada; $arrayEx = explode(",", $array); 

$valor = end($arrayEx);
$comparar = date("d/m/Y");







if (substr_count($valor,$comparar) > 0 )  { 



	
	
	
	?>
	
		<a href ="<?php echo base_url('itemCRUD/saida/'.$item->id);?>"  onclick="return confirm('Você tem Certeza que quer liberar a Saída de <?php $timezone  = -4; $data=gmdate("H:i", time() + 3600*($timezone+date("I"))); echo $item->Nome;?> ?')" class="btn btn-danger" ><i class="fas fa-sign-out-alt"></i> Liberar Saída  </a>
<br/> <?php }?>
		  
       <?php if($this->session->userdata('level')==='Admin'):?>
        <br/>

		<a class="btn btn-warning" href="<?php echo base_url('itemCRUD/edit/'.$item->id) ?>"><i class="fas fa-pencil-alt"></i></a>
		
		
		
		

        <a id="disabledd" class="btn btn-danger" href="<?php echo base_url('itemCRUD/delete/'.$item->id);?>" onclick="return confirm('Você tem Certeza que quer Deletar?');"> <i class="fas fa-trash-alt"></i></a>

            <?php endif;?>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script> 
<script>
 





</script>

<style>
.alternate_body{
    background: red;
}
</style>

		
		
      </td>     
      </tr>
      <?php } 
	  
	
	   
	   
	  ?>
	
	
	<!-- Button trigger modal -->

	  <a id="logout" class="btn btn-danger" href="<?php echo base_url().'Entrar/logout' ?>">Logout</a>

  </tbody>
  
  <tfoot>
        <tr>
           
 
          <th>Foto</th>
		 
          <th>Nome</th>
        <th>CPF /RG</th> 
          <th>Telefone</th>
	<th>Última Entrada</th>
	<th>Motivo</th>
          <th>Última Saida</th>
    
          <th>Ação</th>
        </tr>
      </tfoot>
	  </table>
  </div>

  












<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"> </script>


<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"> </script>


<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js" > </script>
<script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/datetime-moment.js" > </script>

<script>

  $(document).ready( function () {
	  $.fn.dataTable.moment('DD/MM/YYYY HH:mm:ss');
      $('#table_id').DataTable({
		  
		  "order":[[4,"desc"]] ,   stateSave: true,   "pageLength": 10,

		  responsive: true,
		   "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último",
						
                    }
				  
				  
				}
			
        
    } );	  
	  });
	  
	  

  
  
</script>

