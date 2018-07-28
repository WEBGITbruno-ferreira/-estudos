<?php 

/**
* 
*/
class db
{

	//192.168.0.020 - host 
	private $host = 'localhost';

	//user 
	private $usuario = 'root';

	//senha
	private $senha = '';

	//bd
	private $database = 'twitter_clone';
	
	public function conecta_mysql ()
	{
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		mysqli_set_charset($con, 'utf8');

		//verificar  erro  

		if (mysqli_connect_errno()){
			echo 'Erro ao conectar'.mysqli.connect_error();
		}else {
			
		}
		return $con;

	}
}

?>