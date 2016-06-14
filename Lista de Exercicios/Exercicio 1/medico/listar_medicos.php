<?php
	require_once('../bd/conexao.php');
	$sql = 'SELECT * 
          FROM medico        m
             , especialidade e
          WHERE m.id_especialidade = e.id_especialidade';
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
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nome</th>
			<th>CRM</th>
			<th>Especialidade</th>
		</thead>
		<tbody>
		<?php foreach($dbh->query($sql) as $linha): ?>
			<tr>
				<td><?php echo $linha['id_medico']?></td>
				<td><?php echo $linha['nome']?></td>
				<td><?php echo $linha['crm']?></td>
				<td><?php echo $linha['descricao']?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>