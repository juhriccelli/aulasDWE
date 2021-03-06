<?php
require_once('../bd/conexao.php');
require_once('../navBar.php');

//	$sql = 'SELECT * FROM paciente_view';

$sql = 'SELECT p.id_paciente
               , p.nome
               , p.cpf
               , p.data_nascimento
               , CASE
                   WHEN sexo = \'M\'
                     THEN \'Masculino\'
                   ELSE
                     \'Feminino\'
                 END sexo
                 , m.nome AS medico
            FROM paciente p, medico m, paciente_medico pm
            where pm.id_medico = m.id_medico AND pm.id_paciente = p.id_paciente';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Pacientes</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <script src="../grafismo/js/jquery.min.js"></script>
        <link rel="stylesheet" href="../grafismo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../grafismo/css/bootstrap-theme.min.css">
        <script src="../grafismo/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <table class="table table-striped">
                <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Sexo</th>
                <th>Atendido por</th>
                </thead>
                <tbody>
                    <?php foreach ($dbh->query($sql) as $linha): ?>
                        <tr>
                            <td><?php echo $linha['id_paciente'] ?></td>
                            <td><?php echo $linha['nome'] ?></td>
                            <td><?php echo $linha['cpf'] ?></td>
                            <td><?php echo $linha['data_nascimento'] ?></td>
                            <td><?php echo $linha['sexo'] ?></td>
                            <td><?php echo $linha['medico'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>