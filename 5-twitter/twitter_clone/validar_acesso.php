<!DOCTYPE html>
<html>
<head>
	<title></title>
			<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


<?php 

session_start();

echo 'xupis';

require_once('db.class.php');
$user = $_POST['usuario'];
$pass = $_POST['senha'];

$user."<br/>";
$pass."<br/>";

$sql = "SELECT * FROM usuarios WHERE usuario = '$user' and senha = '$pass'";

$objDB = new db();

$link = $objDB->conecta_mysql();


if( $resultado = mysqli_query($link, $sql)){

$result_array = mysqli_fetch_array($resultado);

$_SESSION['usuario'] = $result_array['usuario'];
$_SESSION['email'] = $result_array['email'];

//var_dump ($result_array);
//	echo $result_array;
//	echo ($result_array)== 0;
	//if (($result_array) > 1) {   da certo  
	if (isset($result_array['usuario'])) {

		header('Location: home.php')

?> 
<!-- HTML  
<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully LOGGED
  <form method="post" action="index.php" id="CadastroOK" target="_blank">
  <button type="submit" class="btn btn-primary form-control">Retornar </button>
  </form>


</div> --> 
<!-- PHP  --> 
<?php
	}else {
		echo "opa ai n ";
		header('Location:index.php?erro=1');
	}
}else{
	echo 'erro';
}
	

?>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>