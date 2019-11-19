

<div class= "container teste">

<div class="row">
    <div class="col-lg-12 margin-tb">
        
            <h2> Nome : <?php echo $item->Nome ?></h2>
        
    </div>
</div>
<div class="imgg">
<div class="col-md-12">
        <div class="form-group">
            <strong></strong>
            
          <img  src= '<?php echo 'data:image/jpeg;base64,'.base64_encode( $item->Foto );?>'>

         
        </div>
    </div>
	</div>
<div class="row">
<style>
.container{max-width:700px;}

img{
	
	border: solid 8px black !important;
}
.imgg{
	text-align:center;
}
h2{text-align:center;}
.voltar{
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
		background:url("/Portaria/upload/wp.png");
	

	}
    .mtv{
        font-size:12px;
    }
    .mtv2{
        font-size:17px;
    }
</style>


  <div class="col-md-4">
        <div class="form-group">
            <strong>Nome:</strong>
          <?php echo $item->Nome; ?>
        </div>
    </div> 
    <div class="col-md-4">
        <div class="form-group">
            <strong>CPF / RG :</strong>
            <?php echo $item->CPF; ?>
        </div>
    </div>
	<div class="col-md-4">
        <div class="form-group">
            <strong>Telefone:</strong>
            <?php echo $item->Telefone; ?>
        </div>
    </div>
	 <div class="col-md-4">
        <div class="form-group">
            <strong>Rua:</strong>
            <?php echo $item->rua; ?>
        </div>
    </div>
	
		 <div class="col-md-4">
        <div class="form-group">
            <strong>Cep:</strong>
            <?php echo $item->cep; ?>
        </div>
    </div>
	
	
		 <div class="col-md-4">
        <div class="form-group">
            <strong>Bairro:</strong>
            <?php echo $item->bairro; ?>
        </div>
    </div>
	
	
	
		 <div class="col-md-4">
        <div class="form-group">
            <strong>Cidade:</strong>
            <?php echo $item->cidade; ?>
        </div>
    </div>
	
	
		 <div class="col-md-4">
        <div class="form-group">
            <strong>Estado:</strong>
            <?php echo $item->uf; ?>
        </div>
    </div>
    
	 <div class="col-md-4">
        <div class="form-group">
            <strong>Empresa:</strong>
            <?php echo $item->Empresa; ?>
        </div>
    </div>
    
	
		 <div class="col-md-4">
        <div class="form-group">
            <strong>	Últimas Entradas:</strong>
            <?php //$ex=$item->DataEntrada; 
			
			//$entrada = explode(",", $ex);
			 //echo '<br/>';
		    // Maneira Manual de mostras as datas echo end($entrada);	  if(end ($entrada)==true) echo '<br/>';
			//echo prev($entrada);  if(prev ($entrada)==true) echo '<br/>';
			//echo prev($entrada);  if(prev ($entrada)==true) echo '<br/>';


$array = $item->DataEntrada;	
$arrayEx = explode(",", $array);
foreach (array_reverse($arrayEx,true) as $entradas) {
	
	echo '<br/>'.($entradas);
}
			?>
        </div>
    </div>
	
    
 
<div class="col-md-4 mtv">
        <div class="form-group">
            <strong class="mtv2"> Motivo :</strong>
            
                 
            <?php //$ex=$item->DataEntrada; 


$falarcom = $item->Motivo; 
	  $arrayExplodir = explode(",", $falarcom);





foreach (array_reverse($arrayExplodir,true) as $falado) {
	
	echo '<br/>'.($falado);
}





?>
    

</div>
</div>    
    
    
    
	 <div class="col-md-4">
        <div class="form-group">
            <strong>	Últimas Saídas:</strong>
            <?php //$ex=$item->DataEntrada; 
			
			//$entrada = explode(",", $ex);
			 //echo '<br/>';
		    // Maneira Manual de mostras as datas echo end($entrada);	  if(end ($entrada)==true) echo '<br/>';
			//echo prev($entrada);  if(prev ($entrada)==true) echo '<br/>';
			//echo prev($entrada);  if(prev ($entrada)==true) echo '<br/>';


$array = $item->DataSaida;	
$arrayEx = explode(",", $array);
foreach (array_reverse($arrayEx,true) as $saidas) {
	
	echo '<br/>'.($saidas);
}
			?>
        </div>
    </div>
	
	
		

	
	
</div>

	<div class="voltar">

            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Voltar</a>
        </div></div> <br/>
</div>