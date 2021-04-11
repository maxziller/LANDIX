<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro de Vendedores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="icon" href="img/header/favicon.gif">
		<?php require "incluir/conecta.php";?>
    </head>
    <body>
        <!--Header
        ----------------------------------------------------------------------------------------------------------------
        -->
        <div class="incluir"><?php include "incluir/header.php";?></div>
        
        <!--Content
        ----------------------------------------------------------------------------------------------------------------
        -->
		<div class="conteudo">
			<h2>Atualização de Vendedor</h2>
                <form name="formVendedor" action="incluir/atualizarvendedor.php">
				
				<label for="vend">Vendedor a ser atualizado:</label> <br>
							<select class="form-control" id="vend" name="vend">
							
								<?php                                        
                                        $conn = conectasql();
                                        $result = $conn->query("SELECT cdvend, dsnome FROM VENDEDORES ORDER BY dsnome");
                                        if ($result->num_rows > 0)
                                        { 
                                        while($row = $result->fetch_assoc()){
                                            echo "<option value='".$row['cdvend']."'>".utf8_encode($row['dsnome'])."</option>";                        
                                        }}
                                        $conn->close();
                                ?>
							</select>
				
                <table>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="nome">Nome:</label> </br>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo do vendedor" maxlength="50" required>
                        </div>
					</div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="cdtab">Código da tabela de preços padrão:</label> </br>
                            <input type="number" class="form-control" id="cdtab" name="cdtab" placeholder="000" required>
                        </div>
					</div>
					<div class="row">
                        <div class="form-group col-12">
                            <label for="nasc">Data de nascimento:</label> </br>
                            <input type="date" class="form-control" id="nasc" name="nasc">
                        </div>
					</div>
                    <br>
					<div class="row">
						<input class="btn btn-primary col-3" type="submit" value="Confirmar" name = "inserirvendedor" id="inserirvendedor">
						<input class="btn btn-primary col-3" type="reset" value="Cancelar" id="resetinsercao">
					</div>
                </table>         
            </form>
		</div>
        <!--Footer
        ----------------------------------------------------------------------------------------------------------------
        -->
        <div class="incluir"><?php include "incluir/footer.php"; ?></div>
    </body>
</html>