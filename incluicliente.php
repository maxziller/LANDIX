	<?php require "conecta.php";?>
	<?php include "testardados.php";?>
	<?php
		
		$nome = utf8_decode(testar_input($_GET["nome"]));
		$lim = utf8_decode(testar_input($_GET["limite"]));
		$tipo = utf8_decode(testar_input($_GET["tipo"]));
		$vend = utf8_decode(testar_input($_GET["vend"]));
		$conn = conectasql();
		
		$sql = ("INSERT INTO CLIENTES (dsnome,idtipo,dslim,cdvend) VALUES ('{$nome}','{$tipo}','{$lim}','{$vend}')");
		if (!$sql)
		{
			echo "Falha no SQL";
		}
		if (mysqli_query($conn, $sql)) {
      echo "<script language='javascript'>window.location='http://maxpziller.atwebpages.com/CadastroClientes.php';alert('Cliente ".$nome." cadastrado com sucesso!');</script>";
		} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	;?>