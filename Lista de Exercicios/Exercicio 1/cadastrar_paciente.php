<?php
  require_once('../bd/conexao.php');

	$id_cliente     = $_POST['id_cliente'];
	$nome_paciente  = $_POST['nome_paciente'];
	$cpf = $_POST['cpf'];
	$data_nascimento = $_POST['data_nascimento'];
	$sexo = $_POST['sexo'];

?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Cadastrar Paciente</title>
	  <meta charset="utf-8">
  </head>
  <body>

  	<?php
  		$sql = "INSERT INTO paciente 
  		        VALUES ( $id_cliente
  		               , '$nome_paciente'
  		               , $cpf
					   , '$data_nascimento'
					   , '$sexo')";
			$dbh->exec($sql);
      echo "Paciente Cadastrado com Sucesso"
  	?>
    

  <form action="../index.html" >
    <h3 align="center">
    <input type="submit" value="Voltar" />
  </form>
  
  </body>
</html>