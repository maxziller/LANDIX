<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro de Clientes</title>
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
			<h2>Cadastro de Cliente</h2>
            <form name="formCliente" action="incluir/atualizarcliente.php">
			
				<label for="clien">Vendedor a ser atualizado:</label> <br>
							<select class="form-control" id="clien" name="clien">
							
								<?php                                        
                                        $conn = conectasql();
                                        $result = $conn->query("SELECT cdcl, dsnome FROM CLIENTES ORDER BY dsnome");
                                        if ($result->num_rows > 0)
                                        { 
                                        while($row = $result->fetch_assoc()){
                                            echo "<option value='".$row['cdcl']."'>".utf8_encode($row['dsnome'])."</option>";                        
                                        }}
                                        $conn->close();
                                ?>
							</select>
                
                    <div class="row">
                        <div class="form-group col-8">
                            <label for="nome">Nome:</label> </br>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo do cliente" maxlength="50" required>
                        </div>
						<div class="form-group col-4">
                            <label for="limite">Limite de crédito:</label> </br>
                            <input type="number" step="any" class="form-control" id="limite" name="limite" placeholder="00,00" maxlength="18" required>
                        </div>
					</div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="tipo">Tipo:</label> </br>
							<select class="form-control" id="tipo" name="tipo" required>
								<option value="PF" selected>Pessoa Física</option>
								<option value="PJ">Pessoa Jurídica</option>
							</select>
                        </div>
					</div>
					<div class="row">
                        <div class="form-group col-8">
                            <label for="vend">Vendedor:</label> <br>
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
                        </div>
					</div>
                    <br>
                    <div class="row">
						<input class="btn btn-primary col-3" type="submit" value="Confirmar" id="inserirvendedor">
						<input class="btn btn-primary col-3" type="reset" value="Cancelar" id="resetinsercao">
					</div>
                         
            </form>
		</div>
        <!--Footer
        ----------------------------------------------------------------------------------------------------------------
        -->
        <div class="incluir"><?php include "incluir/footer.php"; ?></div>
    </body>
</html>