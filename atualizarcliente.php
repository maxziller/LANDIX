	<?php require "conecta.php";?>
	<?php include "testardados.php";?>
	<?php
		
		$clien = utf8_decode(testar_input($_GET["clien"]));
		$nome = utf8_decode(testar_input($_GET["nome"]));
		$tipo = utf8_decode(testar_input($_GET["tipo"]));
		$lim = utf8_decode(testar_input($_GET["limite"]));
		$vend = utf8_decode(testar_input($_GET["vend"]));
		$conn = conectasql();
		
		$sql = ("UPDATE CLIENTES SET dsnome = '{$nome}', idtipo = '{$tipo}',dslim = '{$lim}',cdvend = '{$vend}' WHERE cdcl = '{$clien}';");
		if (!$sql)
		{
			echo "Falha no SQL";
		}
		if (mysqli_query($conn, $sql)) {
      echo "<script language='javascript'>window.location='http://maxpziller.atwebpages.com/home.php';alert('Cliente ".$nome." atualizado com sucesso!');</script>";
		} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	;?>