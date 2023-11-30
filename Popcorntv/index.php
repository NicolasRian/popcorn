<?php
require 'repositorio.class.php';
$filmes = $repositorio->getListarFilme();

$destino = "incluir_filme.php";

if (isset($_GET['codigo'])) {
	$codigo = $_GET['codigo'];
	$filme = $repositorio->buscarFilme($codigo);
	$destino = "alterar_filme.php";
	$oculto = '<input type="hidden" name="codigo" value="'.$codigo.'"/>';
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Popcorn TV</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h1>Catalago de Filmes em DVD</h1>

	<form action="<?=$destino;?>" method="POST">
		<?=@$oculto;?>

		<div class="mb-3">
			<label>Filme:</label>
			<input type="text" name="titulo" value="<?php echo isset($filme)?$filme->getTitulo():""?> "class="form-control">
		</div>
		<div class="mb-3">
			<label>Sinopse:</label>
			<textarea name="sinopse" class="form-control"><?php echo isset($filme)?$filme->getSinopse():""?></textarea>
		</div>
		<div class="mb-3">
			<label>Quantidade:</label>
			<input type="text" name="quantidade" value="<?php echo isset($filme)?$filme->getQuantidade():""?>" class="form-control">
		</div>
		<div class="mb-3">
			<label>Trailer:</label>
			<input type="text" name="trailer" value="<?php echo isset($filme)?$filme->getTrailer():""?>" class="form-control">
		</div>
		<div class="mb-3">
			<label>Quantidade:</label>
			<input type="submit" class="btn btn-primary">
		</div>
	</form>

	<?php
	echo "<table class='table table-hover table-striped-columns'>
		<tr>
			<th>Código</th>
			<th>Filme</th>
			<th>Ação</th>
		</tr>";

	while ($filmeTemporario = array_shift($filmes)) {
		echo "<tr>
				<td>".$filmeTemporario->getCodigo()."</td>
				<td>".$filmeTemporario->getTitulo()."</td>
				<td>
					<button onclick= {location.href='?codigo=".$filmeTemporario->getCodigo()."';} class='btn btn-success'>Editar</button>

					<button onclick=\" if(confirm('Tem certeza que deseja excluir o filme?')){location.href='excluir_filme.php?codigo=".$filmeTemporario->getCodigo()."';}else{false} \" class='btn btn-danger'>Excluir</button>

				</td>
			  </tr>";
		}
		echo "</table>";
?>

	<!--<table class="table table-hover table-striped">
		<tr>
			<th>Código</th>
			<th>Filme</th>
			<th>Ação</th>
		</tr>
		<tr>
			<th>1</th>
			<th>Ace Ventura - Um detetive especial</th>
			<th>Excluir | Alterar</th>
		</tr>
		<tr>
			<th>2</th>
			<th>O Mascara</th>
			<th>Excluir | Alterar</th>
		</tr>
		
	</table>-->




</body>
<script type="js/bootstrap.bundle.min.js"></script>
</html>