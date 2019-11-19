<div class="row">
   
   
   <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        
    </div>
</div>
<style>

.container { max-width: 700px; }
.cadastro{border:1px solid #DDD;	
padding:30px;
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

</style>
<div class="cadastro teste">
            <h2>Novo Cadastro</h2>

<div class="container">
<form  class="form-horizontal"method="post" id="frmMain" enctype="multipart/form-data" action="<?php  echo base_url('itemCRUDCreate');?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


<style>
#my_camera{
 width: 320px;
 height: 240px;
}
#results{
	
	text-align:center;
	
}
img#Foto{
	
	height:78%;	
	width:100%;
}
</style>

 <script type="text/javascript" src="/Portaria/assets/web/webcam.js"></script>


<div class="container">
 <div class="row">

  <div id="my_camera" class="col-md-6"></div>

	<script language="JavaScript">
		Webcam.set({
			width: 220,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
 <div id="results" name="results" class="col-md-6"></div>
	
 <input type="button" class="btn btn-primary" value="Tirar Foto" onClick="take_snapshot()" required>
</div>
</div>
		<input  type="hidden" id="mydata"  name="mydata" value=""/>

<input  type="hidden" value="" name="id"/>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="Nome" class="form-control" required>
            </div>
        </div>
		
			<div class="col-md-6">
            <div class="form-group">
                <strong>CPF /RG:</strong>
               <input type="CPF" name="CPF" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Telefone:</strong>
               <input type="Telefone" name="Telefone" id="Telefone" class="form-control" required>
            </div>
        </div>
		
		
		 <div class="col-md-6">
            <div class="form-group">
                <strong>CEP:</strong>
               <input type="cep" name="cep" id="cep" class="form-control ls-mask-cep">
            </div>
        </div>
		
		
		
		 <div class="col-md-6">
            <div class="form-group">
                <strong>Rua:</strong>
               <input type="rua" name="rua" id="rua" class="form-control">
            </div>
        </div>
		
		
		
		 <div class="col-md-6">
            <div class="form-group">
                <strong>Bairro:</strong>
               <input type="bairro" name="bairro" id="bairro" class="form-control">
            </div>
        </div>
		
		
		 <div class="col-md-6">
            <div class="form-group">
                <strong>Cidade:</strong>
               <input type="cidade" name="cidade" id="cidade" class="form-control">
            </div>
        </div>
		
		
		 <div class="col-md-6">
            <div class="form-group">
                <strong>Estado:</strong>
               <input type="uf" name="uf" id="uf" class="form-control">
            </div>
        </div>
		<div class="col-md-6">
            <div class="form-group">
                <strong>Empresa:</strong>
               <input type="Empresa" name="Empresa" id="Empresa" class="form-control">
            </div>
        </div>
        
     
	<script type="text/javascript">
$(document).ready(function(){
	$("#cep").mask("99999-999");
});
</script>
	
     
<div class="col-md-12">

                <button type="submit" onclick="saveSnap()" name="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Voltar </a>
        </div>
</div>



 <script src="/Portaria/assets/js/shortcut.js"></script>


 <!-- Script -->
<script>
  var frmMain = document.getElementById("frmMain");
  frmMain.onsubmit = function() {
    var requiredDiv = document.getElementById("results");
    if (requiredDiv.innerHTML.trim().length == 0) {
      alert("Nao Esqueca de Tirar a Foto !");
      return false;
    }
  };
</script>

 <!-- Code to handle taking the snapshot and displaying it locally -->
  <script language="JavaScript">
 
 // Configure a few settings and attach camera
 function configure(){
  Webcam.set({
   width: 220,
   height: 240,
   image_format: 'jpeg',
   jpeg_quality: 90
   
  });
  Webcam.attach( '#my_camera' );
 }
 // A button for taking snaps


 // preload shutter audio clip


function take_snapshot() {
 
Webcam.snap( function(data_uri) {
	
	
	document.getElementById('results').innerHTML = 
   '<image name="Foto" id="Foto" src="'+data_uri+'" required/>';

	
		var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
		
		document.getElementById('mydata').value = raw_image_data;
	} );

 }

function saveSnap(){
 // Get base64 value from <img id='imageprev'> source
 var base64image = document.getElementById("Foto").src;

 Webcam.upload( base64image, './webcam', function(code, text) {
  console.log('Save successfully');
  //console.log(text);
 });





}



 
shortcut.add("F2",function() 
{
	Webcam.snap( function(data_uri) {
	
	
	document.getElementById('results').innerHTML = 
   '<image name="Foto" id="Foto" src="'+data_uri+'" required/>';

	
		var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
		
		document.getElementById('mydata').value = raw_image_data;
	} );

});


</script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script>
    var options = {
    onKeyPress: function (phone, e, field, options) {
        var masks = ['(00) 0000-00000', '(00) 00000-0000'];
        var mask = (phone.length > 14) ? masks[1] : masks[0];
        $('#Telefone').mask(mask, options);
    }
};

$('#Telefone').mask('(00) 0000-00000', options);
  </script>

</div>


</form>