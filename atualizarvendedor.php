	<?php require "conecta.php";?>
	<?php include "testardados.php";?>
	<?php
		
		$vend = utf8_decode(testar_input($_GET["vend"]));
		$nome = utf8_decode(testar_input($_GET["nome"]));
		$cdt = utf8_decode(testar_input($_GET["cdtab"]));
		$dtn = utf8_decode(testar_input($_GET["nasc"]));
		$dtn = strtotime($dtn);
		$dtn = date('Y-m-d',$dtn);
		$conn = conectasql();
		
		
			$sql = ("UPDATE VENDEDORES SET dsnome = '{$nome}', cdtab = '{$cdt}',dtnasc = '{$dtn}' WHERE cdvend = '{$vend}';");

			if (!$sql)
			{
				echo "Falha no SQL";
			}
			if (mysqli_query($conn, $sql)) 
			
			{
      echo "<script language='javascript'>window.location='http://maxpziller.atwebpages.com/home.php';alert('Vendedor ".$nome." atualizado com sucesso!');</script>";
		} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	;?>
