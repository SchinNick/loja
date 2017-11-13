
	<?php
	include("conecta.php");
	include("cabecalho.php");
	include("banco-produto.php");


	$nome = $_GET['nome']; aasda
	$preco = $_GET['preco'];

	if(insereProduto($conexao, $nome, $preco)){ ?>
		<p class="text-success">Produto <?= $nome ?> de R$ <?= $preco ?> adicionado com sucesso!</p>
	<?php } else {
			$msg = mysqli_error($conexao);
		?>
		<p class="text-danger">Produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>

	<?php
	}
	 include("rodape.php") ?>
