<?php
  require_once('../bd/conexao.php');
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Listar</title>
	  <meta charset="utf-8">
    <link rel="stylesheet" href="../estilos.css" type="text/css"></link>
  </head>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Data Nascimento</th>
          <th>Sexo</th>
        </tr> 
      </thead>
      <tbody>
        <?php
          foreach($dbh->query('SELECT * FROM paciente') as $linha){
            echo '<tr>';
            echo "<td>{$linha['id_paciente']}</td>";            
            echo "<td>{$linha['nome']}</td>";
            echo "<td>{$linha['cpf']}</td>";  
            echo "<td>{$linha['data_nascimento']}</td>";  
            echo "<td>{$linha['sexo']}</td>";  
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>