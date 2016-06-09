<?php
  require_once('../bd/conexao.php');

	$id_medico     = $_POST['id_medico'];
	$nome_medico  = $_POST['nome_medico'];
	$crm = $_POST['crm'];
  $id_especialidades = $_POST['id_especialidades'];
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Cadastrar Médico</title>
	  <meta charset="utf-8">
  </head>
  <body>
  	<?php
  		$sql = "INSERT INTO dep 
  		        VALUES ( $id_medico
  		               , '$nome_medico'
  		               , $crm
                     , $id_especialidades)";

			$dbh->exec($sql);
  	?>
  </body>
</html>