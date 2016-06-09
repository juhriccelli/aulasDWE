<?php
require_once('../bd/conexao.php');
$sql = 'SELECT id_paciente
               , nome
               , cpf
               , to_char(data_nascimento, \'dd/mm/yyyy\') AS data_nascimento
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
        <title>Listar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../estilos.css" type="text/css"></link>
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
            <?php foreach ($dbh->query($sql) as $linha): ?>
                <tr>
                    <td><?php echo $linha['id_paciente'] ?></td>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['cpf'] ?></td>
                    <td><?php echo $linha['data_nascimento'] ?></td>
                    <td><?php echo $linha['sexo'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>