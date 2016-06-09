<?php
  require_once('../bd/conexao.php');

	$id_medico     = $_POST['id_medico'];
	$nome_medico  = $_POST['nome_medico'];
	$crm = $_POST['crm'];
  $id_especialidade = $_POST['especialidade'];
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Cadastrar Médico</title>
	  <meta charset="utf-8">
  </head>
  <body>
  	<?php
  		$sql = "INSERT INTO medico 
  		        VALUES ( $id_medico
  		               , '$nome_medico'
  		               , $crm
                     , $id_especialidade)";

			$dbh->exec($sql);
      echo "Médico Cadastrado com Sucesso"
  	?>
  </body>

  <form action="../index.html" >
    <h3 align="center">
    <input type="submit" value="Voltar" />
  </form>

</html>