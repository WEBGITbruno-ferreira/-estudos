<!DOCTYPE html>
<html>
<head>
	<title></title>
			<!-- jquery - link cdn------- -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


<?php
require_once('db.class.php');

 $user = $_POST['usuario'];
 $email = $_POST['email'];
 $senha = md5($_POST['senha']);


$objDB = new db();

$link = $objDB->conecta_mysql();

$sql = "insert into  usuarios(usuario, email, senha) values ('$user','$email','$senha')";

$resultado = '';  

if( $resultado = mysqli_query($link, $sql)){



?> 
<!-- HTML  --> 
<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully registered
  <form method="post" action="index.php" id="CadastroOK">
  <button type="submit" class="btn btn-primary form-control">Retornar </button>
  </form>
</div>
<!-- PHP  --> 
<?php
}else{
	echo 'erro';
}
	

?>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>