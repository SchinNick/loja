<?php 

include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
$produtos = listaProdutos($conexao);
?>

<table class="table table-striped table-bordered">

<?php
foreach($produtos as $produto):
?>
	<tr>
		<td><?= $produto['nome'] ?></td>
		<td><?= $produto['preco'] ?></td>
		<td>
			<a href="remove-produto.php?id=<?=$produto['id'];?>" class="text-danger">remover</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php include("rodape.php") ?>