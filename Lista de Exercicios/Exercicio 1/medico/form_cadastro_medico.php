<?php
	require_once('../bd/conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Médicos</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
        <script src="../grafismo/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../grafismo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../grafismo/css/bootstrap-theme.min.css">
        <script src="../grafismo/js/bootstrap.min.js"></script>
</head>
<body>
    <form role="form" action="cadastrar_medico.php" method="post">
		<div class="form-group">
			<label for="id_medico">Id</label>
			<input type="numeric" name="id_medico" id="id_medico" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" required />
		</div>			
		<div class="form-group">
			<label for="crm">CRM</label>
			<input type="text" name="crm" id="crm" class="form-control" required />
		</div>			
		<div class="form-group">
			<label for="id_especialidade">Especialidade</label>
			<select name="id_especialidade" id="id_especialidade" class="form-control">
				<?php foreach($dbh->query('SELECT * FROM especialidade') as $linha): ?>
				<option value="<?php echo $linha['id_especialidade']?>"><?php echo $linha['descricao']?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<button type="submit" class="btn btn-default">Cadastrar</button>			
	</form>
</body>
</html>