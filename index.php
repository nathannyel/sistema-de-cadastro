<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="index.php"><li>Cadastro</li></a>
				<a href="consultas.php"><li>Consultas</li></a>
			</ul>
		</nav>
		<section>
			<h1>Cadastro de Usuarios</h1>
			<hr><br><br>
			<form method="post" action="processa.php>">
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				<br><br>
				Nome<br>
				<input type="text" name="nome" class="campo" maxlength="60" required autofocus><br>
				E-mail<br>
				<input type="email" name="email" class="campo" maxlength="60" required><br>
				Profissao<br>
				<input type="text" name="profissao" class="campo" maxlength="60" required><br>
			</form>
		</section>
	</div>
</body>
</html>