
<?php 





$filename = date('YmdHis').'.jpeg';
$cpf=$_REQUEST['CPF'];

$queryupdate ="UPDATE dados SET Foto =('$filename') WHERE CPF=('$cpf')";
$resultUpdate = mysqli_query($connect, $queryupdate);
var_dump($cpf);
var_dump($queryupdate);
$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
 $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
}

// Return image url
echo $url;
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"

        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"

        crossorigin="anonymous"></script>

