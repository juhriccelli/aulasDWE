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
	  <title>Listar Médicos</title>
	  <meta charset="utf-8">
    <link rel="stylesheet" href="../estilos.css" type="text/css"></link>
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

	<script>
		function f_gerar(){
			var n1 = document.getElementById("n1").value;
			var n2 = document.getElementById("n2").value;

			n1 = parseInt(n1);
			n2 = parseInt(n2);

			var snumeros = "";
			for(var i = n1; i <= n2; i++){
				snumeros += i;
				snumeros += "<br />";
			}

			var resultado = document.getElementById("resultado");
			resultado.innerHTML = snumeros;
		}
	</script>
</head>
<body>
	<input type="number" name="n1" id="n1" />
	<input type="number" name="n2" id="n2" />
	<button onclick="f_gerar()">Gerar</button>
	<div id="resultado"></div>
</body>
</html>

</html>
