<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<title>Curso PHP</title>
</head>

<body>
	<header class="header">
		<h1>Curso PHP</h1>
		<h2>Índice dos exercícios</h2>
	</header>
	<main class="main">
		<div class="content">
			<nav class="modules">
				<div class="module green">
					<h3>Módulo 01 - Básico</h3>
					<ul>
						<li><a href="exercise.php?dir=basico&file=ola">Olá PHP</a></li>
						<li><a href="exercise.php?dir=basico&file=html">Integração HTML</a></li>
						<li><a href="exercise.php?dir=basico&file=css">Integração CSS</a></li>
						<li><a href="exercise.php?dir=basico&file=comentarios">Comentários PHP</a></li>
					</ul>
				</div>

			</nav>
		</div>
	</main>
	<footer class="footer">COD3R & ALUNOS ©
		<?=
		date('Y');
		?>
	</footer>
</body>

</html>