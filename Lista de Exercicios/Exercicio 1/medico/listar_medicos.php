<?php
require_once('../navBar.php');
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
        <title>Listagem de Médicos</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <script src="../grafismo/js/jquery.min.js"></script>
        <link rel="stylesheet" href="../grafismo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../grafismo/css/bootstrap-theme.min.css">
        <script src="../grafismo/js/bootstrap.min.js"></script>
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
            <?php foreach ($dbh->query($sql) as $linha): ?>
                <tr>
                    <td><?php echo $linha['id_medico'] ?></td>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['crm'] ?></td>
                    <td><?php echo $linha['descricao'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>