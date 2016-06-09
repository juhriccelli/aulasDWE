<?php
  require_once('../bd/conexao.php');
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Listar Médicos</title>
	  <meta charset="utf-8">
    <link rel="stylesheet" href="../estilos.css" type="text/css"></link>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CRM</th>
          <th>Especialidades</th>
        </tr> 
      </thead>
      <tbody>

        <?php
          foreach($dbh->query('SELECT * FROM medico') as $linha){
            echo '<tr>';
            echo "<td>{$linha['id_medico']}</td>";            
            echo "<td>{$linha['nome']}</td>";
            echo "<td>{$linha['crm']}</td>";
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>