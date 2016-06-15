<?php
require_once('navBar.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Controle de Hospital</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <script src="grafismo/js/jquery.min.js"></script>
        <link rel="stylesheet" href="grafismo/css/bootstrap.min.css">
        <link rel="stylesheet" href="grafismo/css/bootstrap-theme.min.css">
        <script src="grafismo/js/bootstrap.min.js"></script>
    </head>
        <div id="topo">
        </div>
        <div id="corpo">
        <div id="menu">
            <br />
            <ul>
                <li><a href="index.php" class="atual">Home</a></li>
                <li>||</li>
                <li><a href="medico/form_cadastro_medico.php">Cadastrar Médico</a></li>
                <li>||</li>
                <li><a href="paciente/form_cadastro_paciente.php">Cadastrar Paciente</a></li>
                <li>||</li>
                <li><a href="medico/listar_medicos.php">Listar Médicos</a></li>
                <li>||</li>
                <li><a href="paciente/listar_pacientes.php">Listar Pacientes</a></li>
            </ul>
        </div>
        
        <div id="rodape">Hospital IFSP || ₢Todos os Direitos Reservados        </div>
    </div>
</html>