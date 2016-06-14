<?php
	require_once('../bd/conexao.php');

//	$sql = 'SELECT * FROM paciente_view';

	$sql = 'SELECT id_paciente
               , nome
               , cpf
               , data_nascimento
               , CASE
                   WHEN sexo = \'M\'
                     THEN \'Masculino\'
                   ELSE
                     \'Feminino\'
                 END sexo
            FROM paciente';
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
			<th>CPF</th>
			<th>Data Nascimento</th>
			<th>Sexo</th>
		</thead>
		<tbody>
		<?php foreach($dbh->query($sql) as $linha): ?>
			<tr>
				<td><?php echo $linha['id_paciente']?></td>
				<td><?php echo $linha['nome']?></td>
				<td><?php echo $linha['cpf']?></td>
				<td><?php echo $linha['data_nascimento']?></td>
				<td><?php echo $linha['sexo']?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>