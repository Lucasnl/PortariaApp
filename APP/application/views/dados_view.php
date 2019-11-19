<?php  
 $connect = mysqli_connect("localhost", "root", "", "scout");  
 $query = "SELECT * FROM dados ORDER BY ID desc";  
 $result = mysqli_query($connect, $query);  
 
 
 
 
 ?>  

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn PHP CodeIgniter Framework with AJAX and Bootstrap</title>
  


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	    <link href="<?php echo base_url('assets/style.css')?>" rel="stylesheet">
  
       <script src="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"></script>

    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
        
       <style>
        
        @charset "ISO-8859-1";

@import url("https://use.fontawesome.com/releases/v5.0.11/css/all.css");

.Button {
	height: 50px;
	position: relative;
	background: #ccc;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 0px;
	left: 0px;
	right: 0px;
	width: 100%;
	overflow: hidden;
}

.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  padding-left: 0px;
  height: 100%;
  width: 17%;
  color: #e1ffff;
}

.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: 'Font Awesome 5 Free';
  content: "\f13a";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
  font-weight: 900;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: 'Font Awesome 5 Free';
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  font-weight: 900;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #84a3c6;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}
        </style> 

<!------ Include the above in your HEAD tag ---------->

  </head>
  <body>
      

      
  
      
      
      
      
      
    <!-- Our Custom CSS -->



<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
               <img src="https://png.icons8.com/color/1600/league-of-legends.png" width="25%" align="center"/> 
            </div>

            <ul class="list-unstyled components">
                <p>Painel do Admin</p>
                <li class="active">
                 

                       <a href="<?php echo base_url('admin') ?>" data-toggle="" aria-expanded="false" class="dropdown-toggle">  <i class="fas fa-home">                </i>  InĂ­cio</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-user"></i> Sobre</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="far fa-calendar-check"></i>    Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
                  
            </ul>

            <ul class="list-unstyled CTAs">
                
                <li>
                    <a href="<?php echo base_url('entrar/logout') ?>" class="download"> <i color="black" class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </nav>

      
      
      
      
      
      
      
      
      
       <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Expandir Menu</span>
                    </button>
                 

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                    </div>
                </div>
            </nav>

      
      
      
      
      
    
  
      
      
 
 
  <div class="container">
    <h1>CADASTRO DE PLAYERS</h1>

    <br />
    <button class="btn btn-success" onclick="add_player()"><i class="glyphicon glyphicon-plus"></i> Adicionar dados</button>
   
   <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					<th>ID</th>
					<th>Foto</th>
					<th>im</th>
					<th>Player</th>
				
					<th>Conta Solo Q</th>
				
				  <th>Role</th>

 
          <th style="width:125px;">Action
         </th>
        </tr>
      </thead>
      <tbody>
				   <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
				     <tr>
				         <td><?php echo $row["ID"];?></td>
						 
						       <td width="10%"><img src="/CodeIgniter/assets/uploads/<?php echo $row["Foto"]?>" class="img-thumbnail"  width="60%"  ></td>
							   						       <td width="10%"><img src="/CodeIgniter/assets/uploads/<?php echo $row["im"]?>" class="img-thumbnail"  width="60%"  ></td>

                         <td><a href="paginas/view?id=<?php echo $row["ID"];?>" class="hover" ID="<?php echo $row["ID"]; ?>"><?php echo $row["Player"]?> </a>
                             </td>
								 
								<td><?php echo $row["ContaSoloQ"]?></td>
								<td><?php echo $row["Role"]?></td>
								
								
								<td>
									<button class="btn btn-warning" onclick="edit_player(<?php echo $row["ID"];?>)"><i class="glyphicon glyphicon-pencil"></i></button>
									<button class="btn btn-danger" onclick="delete_player(<?php echo $row["ID"];?>)"><i class="glyphicon glyphicon-remove"></i></button>
 
 
								</td>
				      </tr>
				     <?php }?>
 
 
 
      </tbody>
 
      <tfoot>
        <tr>
          <th>ID</th>
		            <th>Foto</th>
					<th>im</th>
					<th>Player</th>
					
					<th>Conta Solo Q</th>
					<th>Role</th>
             <th>Action</th>
        </tr>
      </tfoot>
	  

	  
	  
    </table>
	  
    <form method="post" action="<?php echo base_url('/dados/idextra/') ?>">



<?php  
 $connect = mysqli_connect("localhost", "root", "", "scout");  
 $query = "SELECT * FROM dados ORDER BY ID desc";  
 $result = mysqli_query($connect, $query);  
 ?>
 
 
<label> Adicionar uma Nova Conta Para o Jogador </label> <select name="bd">
<?php
                          while($row = mysqli_fetch_array($result))  
                          {  

                            echo '<option name="'.$row["Player"].'" value="'.$row["Player"].'">'.$row["Player"].'</option>';   
                          }
                          ?>  

</select> <br>
<label>Nome Da Conta </label>
<input type="Text" name="IdExtra" /> 

<input type="submit" name="salvarExtra" value="Salvar"/>
  </form>
      
 

  
  
  
  

 <script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
	  <script src="<?php echo base_url('assets/datatables/js/traducao.js')?>"></script>
  
  <script src="<?php echo base_url('assets/contaextra.js')?>"></script>
 
 

 
 
 
  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;
 
 
    function add_player()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
 
    function edit_player(ID)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('dados/ajax_edit/')?>/" + ID,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="ID"]').val(data.ID);
            $('[name="Player"]').val(data.Player);
           
            $('[name="ContaSoloQ"]').val(data.ContaSoloQ);
            $('[name="Role"]').val(data.Role);
			$('[name="userfile"]').val(data.userfile);
			$('[name="imagems"]').val(data.imagems);
		
       
		
		  $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit dados'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
 
 
    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('dados/dados_add')?>";
      }
      else
      {
        url = "<?php echo site_url('dados/dados_update')?>";
      }
 
 $('#form').submit(function(e)
{
	
 
           $.ajax({
            url : url,
            type: "POST",
            data: new FormData(this),
            dataType: "JSON",
			 processData:false,
             contentType:false,
             cache:false,
             async:false,
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
 });
    }
 
    function delete_player(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('dados/dados_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
			
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
 
  </script>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog ">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Adicionar Player</h3>
      </div>
      <div class="modal-body form">
	  
	
        <form   method="post" enctype="multipart/form-data" id="form" class="form-horizontal">
       


		<input type="hidden" value="" name="ID"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Player</label>
              <div class="col-md-9">
                <input name="Player" placeholder="" class="form-control" type="text" />
              </div>
            </div>
        
            <div class="form-group">
              <label class="control-label col-md-3">ContaSoloQ</label>
              <div class="col-md-9">
								<input name="ContaSoloQ" placeholder="" class="form-control" type="text" />
 
              </div>
            </div>
						<div class="form-group">
							<label class="control-label col-md-3">Role</label>
							<div class="col-md-9">
								<input name="Role" placeholder="" class="form-control" type="text" />
 
							</div>
						</div>
						
						
						
 
                     <div class="form-group">
							<label class="control-label col-md-3">Foto</label>
							<div class="col-md-9">
								<input name="userfile" placeholder="" id="image_id" class="form-control" type="file" /> 
 
							</div>
						</div>
						

						
 
         </div>
     
          </div>
          <div class="modal-footer">

            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <input type ="submit" name="submit" value="Salvar"  id="btnSave " onclick="save()" class="btn btn-primary" />
		 
             
			 <input id="old" name="old" type="hidden" />
			 
			 
			 
			 

			 
		 </div>
		 
		 
		 
	
				 	 
	<div id="results">Your captured image will appear here...</div>
	
	<h1>WebcamJS Test Page</h1>
	<h3>Demonstrates setting up camera after a click.</h3>
	
	<div id="my_camera"></div>
	
	<!-- First, include the Webcam.js JavaScript Library -->

  
  
  <script type="text/javascript" src="/CodeIgniter/assets/web/webcam/webcam.min.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
	</script>
	
	<!-- A button for taking snaps -->
	<form>
		<input type="button" value="Access Camera" onClick="setup(); $(this).hide().next().show();">
		<input type="button" value="Take Snapshot" onClick="take_snapshot()" style="display:none">
	</form>
	
	<!-- Code to handle taking the snapshot and displaying it locally -->

			
			
	</script>


	 </form>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 


  </body>
  
</html>

 