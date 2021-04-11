<?php
	define ("HOST","---");
	define ("USER","---");
	define ("PASS","---"); 
	define ("DATABASE","---"); 
	function conectasql()
	{

		$conexao = new mysqli(HOST,USER,PASS,DATABASE);
		if($conexao->connect_error){
                        echo $conexao->connect_error;
			throw new Exception('Falhas na conexão com o MySQL: ' . $conexao->connect_error);
		}
		return $conexao;
		
	}
	
	function conectasqli()
	{
		$conexao = mysqli_connect("HOST","USER","PASS","DATABASE");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		return $conexao;
	}
?>