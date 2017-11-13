<?php include("cabecalho.php") ?>
	<h1>Formulário de Contato</h1>
	<form action="adiciona-produto.php">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome" class="form-control"><br></td>
			</tr>
			<tr>
				<td>Preço</td>
				<td><input type="number" name="preco" class="form-control"><br></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary" type="submit" class="form-control">Cadastrar</button></td>
			</tr>
		</table>
	</form>	
<?php include("rodape.php") ?>	
