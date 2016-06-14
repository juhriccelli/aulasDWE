<?php
	require_once('../bd/conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form role="form" action="cadastrar.php" method="post">
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
		<button type="submit" class="btn btn-default">Submit</button>			
	</form>
</body>
</html>