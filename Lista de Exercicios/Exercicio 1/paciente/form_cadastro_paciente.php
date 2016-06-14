<?php
	require_once('../bd/conexao.php');
        require_once('../navBar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Paciente</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
        <script src="../grafismo/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../grafismo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../grafismo/css/bootstrap-theme.min.css">
        <script src="../grafismo/js/bootstrap.min.js"></script>
</head>
<body>
    <form role="form" action="cadastrar_paciente.php" method="post">
		<div class="form-group">
			<label for="id_paciente">Id</label>
			<input type="numeric" name="id_paciente" id="id_paciente" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" required />
		</div>			
		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" id="cpf" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="data_nascimento">Data Nascimento</label>
			<input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required />
		</div>
		<div class="form-group">
			<div class="radio">
			  <label><input type="radio" name="sexo" value="M">Masculino</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="sexo" value="F">Feminino</label>
			</div>			
		</div>								
		<button type="submit" class="btn btn-default">Cadastrar</button>			
	</form>
</body>
</html>