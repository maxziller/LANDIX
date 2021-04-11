<!DOCTYPE html>

<html>
    <head>
        <title>Max Pereira Ziller - Processo LANDIX</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="icon" href="img/header/favicon.gif">
        <?php require "incluir/conecta.php";?>
		
		<script>
			function mostraConteudo(vendedor){
				destroiTabela();
				$conn = conectasql();
				$result = $conn->query("SELECT dsnome, cdtab,dtnasc FROM VENDEDORES WHERE cdvend = '".vendedor."' ORDER BY dsnome");
				document.getElementById("EditVendedor").disabled = "false";
				var tabela = document.getElementById("tabela");
				var linha = tabela.insertRow(1);
				var celula0 = linha.insertCell(0);
				var celula1 = linha.insertCell(1);
				var celula2 = linha.insertCell(2);
				var celula3 = linha.insertCell(3);
				
				celula0.innerHTML = utf8_encode($row['nome']);
				celula1.innerHTML = utf8_encode($row['tipo']);
				celula2.innerHTML = utf8_encode($row['vend']);
				celula3.innerHTML = utf8_encode($row['lim']);
				
                $conn->close();
			}
			
			
			function destroiTabela() {
				var tabela = document.getElementById("tabelatoda");
				tabela.remove();
			}
		</script>
		
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
            <div id="content" class="container">
			<div class="col-xs-4">
				<h2>Vendedor</h2>	
					<a href="CadastroVendedor.php"><button type="button" class="btn btn-primary">Novo vendedor</button></a>
					<button type="button" class="btn btn-primary" disabled id="EditVendedor">Editar vendedor</button>
					<div class="table-responsible">	
						<table class="table table-hover">
							<thead>
								<tr>
								<th class="col-1">Edição</th>
								<th class="col-2">Nome</th>
								<th class="col-1">CDTab</th>
								<th class="col-2">Nascimento</th>
								</tr>
							</thead>
							<tbody>
							<div class="form-check">
                            <?php
                                $conn = conectasql();
                                $result = $conn->query("SELECT cdvend, dsnome, cdtab,dtnasc FROM VENDEDORES ORDER BY dsnome");
                                                if ($result->num_rows > 0)
                                                { 
                                                while($row = $result->fetch_assoc()){
                                                    echo "<tr class='linhavendedor' onclick='mostraConteudo(".utf8_encode($row['cdvend']).")'>";
                                                    
													echo "<td><input class='form-check-input checkvendedor' name='CheckVendedor' type='radio' value='".utf8_encode($row['cdvend'])."'></td>";
													
													echo "<td class='linhavendedor' onclick='mostraConteudo(".utf8_encode($row['cdvend']).")'>".utf8_encode($row['dsnome'])."</td>";
                                                    echo "<td class='linhavendedor' onclick='mostraConteudo(".utf8_encode($row['cdvend']).")'>".utf8_encode($row['cdtab'])."</td>";
													echo "<td class='linhavendedor' onclick='mostraConteudo(".utf8_encode($row['cdvend']).")'>".date('d-m-Y',strtotime($row['dtnasc']))."</td>";
													echo "</tr>";
                                                }}
                                                $conn->close();
                                        ?>
							</div>
							</tbody>
					</table>
					</div>
			</div>
			<div class="col-xs-8">
				<h2>Clientes</h2>	
					<button type="button" class="btn btn-primary" action="divtudo.display = 'inline'">Mostrar todos</button>
					<a href="CadastroClientes.php"><button type="button" class="btn btn-primary">Novo cliente</button></a>
					<button type="button" class="btn btn-primary" disabled>Editar cliente</button>
					<div class="table-responsible" display="none" name="divtudo">	
						<table class="table table-hover" id="tabelatoda">
							<thead>
								<tr>
								<th class="col-2">Nome</th>
								<th class="col-1">Tipo</th>
								<th class="col-2">Vendedor</th>
								<th class="col-1">Crédito</th>
								</tr>
							</thead>
							<tbody id="tabelaclientes" name="tabelaclientes">
                            <?php
                                $conn = conectasql();
                                $result = $conn->query("SELECT c.dsnome as nome, c.idtipo as tipo, v.dsnome as vend,c.dslim as lim
														FROM CLIENTES c, VENDEDORES v
														WHERE v.cdvend = c.cdvend
                                                        ORDER BY c.dsnome");
                                                if ($result->num_rows > 0)
                                                { 
                                                while($row = $result->fetch_assoc()){
                                                    echo "<tr>";
                                                    echo "<td>".utf8_encode($row['nome'])."</td>";
													echo "<td>".utf8_encode($row['tipo'])."</td>";
                                                    echo "<td>".utf8_encode($row['vend'])."</td>";
                                                    echo "<td>R$".utf8_encode($row['lim'])."</td>";
													echo "</tr>";
                                                }}
                                                $conn->close();
                                        ?>
							</tbody>
					</table>
					</div>
			</div>
			</div>
        </div>
        <!--Footer
        ----------------------------------------------------------------------------------------------------------------
        -->
        <div class="incluir"><?php include "incluir/footer.php"; ?></div>
    </body>