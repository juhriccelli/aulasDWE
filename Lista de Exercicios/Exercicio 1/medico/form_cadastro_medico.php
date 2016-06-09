<?php
  require_once('../bd/conexao.php');
  $query = mysql_query("SELECT * FROM especialidade");
?>

<!DOCTYPE html>
<html>
  <head>
	  <title>Cadastrar Médico</title>
	  <meta charset="utf-8">
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