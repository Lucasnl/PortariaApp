
<style>

.container { max-width: 700px; }
.editarcadastro { 
padding:30px; }


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
</style>
<div class="container teste">
<div class="editarcadastro">
<form method="post" action="<?php echo base_url('itemCRUD/update/'.$item->id);?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Cadastro</h2>
        </div>
     
    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="Nome" required class="form-control" value="<?php echo $item->Nome; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>CPF:</strong>
               <input readonly type="text" name="CPF" class="form-control" value="<?php echo $item->CPF; ?>">
            </div>
        </div>
		
			  <div class="col-md-6">
            <div class="form-group">
                <strong>Telefone:</strong>
               <input type="text" name="Telefone" required class="form-control" value="<?php echo $item->Telefone; ?>">
            </div>
        </div>
		
		
		  <div class="col-md-6">
            <div class="form-group">
                <strong>Cep:</strong>
               <input type="text" name="cep" id="cep" class="form-control cep-mask" value="<?php echo $item->cep; ?>">
            </div>
        </div>
		
		  <div class="col-md-6">
            <div class="form-group">
                <strong>Rua:</strong>
               <input type="text" name="rua" id="rua" class="form-control" value="<?php echo $item->rua; ?>">
            </div>
        </div>
		
		  <div class="col-md-6">
            <div class="form-group">
                <strong>Bairro:</strong>
               <input type="text" name="bairro" id="bairro" class="form-control" value="<?php echo $item->bairro; ?>">
            </div>
        </div>
		
		  <div class="col-md-6">
            <div class="form-group">
                <strong>Cidade:</strong>
               <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $item->cidade; ?>">
            </div>
        </div>
		
		  <div class="col-md-6">
            <div class="form-group">
                <strong>Estado:</strong>
               <input type="text" name="uf" id="uf" class="form-control" value="<?php echo $item->uf; ?>">
            </div>
        </div>
        
        
        <div class="col-md-6">
            <div class="form-group">
                <strong>Empresa:</strong>
               <input type="Empresa" name="Empresa" id="Empresa" class="form-control" value="<?php echo $item->Empresa; ?>">
            </div>
        </div>
		
        <div class="col-md-6">
            <div class="form-group">
                <strong>Motivo:</strong>
               <textarea rows ="10" class="form-control" name="Motivo" required > <?php echo $item->Motivo;?> </textarea>
             
            </div>
        </div>
        
        
        
        
        
                <div class="col-md-6">
            <div class="form-group">
                <strong>Ultima Saída:</strong>
               <textarea rows ="10" class="form-control" name="DataSaida" required > <?php echo $item->DataSaida;?> </textarea>
             
            </div>
        </div>
        
	
        <div class="col-md-12 text-center">
                <button type="submit"  class="btn btn-primary">Editar Cadastro</button>
        </div>
    </div>
   <div class="col-md-12">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Voltar</a>
        </div>

</form>
</div>