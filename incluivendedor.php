	<?php require "conecta.php";?>
	<?php include "testardados.php";?>
	<?php
		
		$nome = utf8_decode(testar_input($_GET["nome"]));
		$cdt = utf8_decode(testar_input($_GET["cdtab"]));
		$dtn = utf8_decode(testar_input($_GET["nasc"]));
		$dtn = strtotime($dtn);
		$dtn = date('Y-m-d',$dtn);
		$conn = conectasql();
		
		$sql = ("INSERT INTO VENDEDORES (dsnome,cdtab,dtnasc) VALUES ('{$nome}','{$cdt}','{$dtn}')");
		if (!$sql)
		{
			echo "Falha no SQL";
		}
		if (mysqli_query($conn, $sql)) {
      echo "<script language='javascript'>window.location='http://maxpziller.atwebpages.com/CadastroVendedor.php';alert('Vendedor ".$nome." cadastrado com sucesso!');</script>";
		} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	;?>
