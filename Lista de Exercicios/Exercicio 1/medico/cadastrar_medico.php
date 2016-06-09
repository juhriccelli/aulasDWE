<?php

require_once('../bd/conexao.php');

$id_medico = $_POST['id_medico'];
$nome = $_POST['nome'];
$crm = $_POST['crm'];
$id_especialidade = $_POST['id_especialidade'];

$sql = "INSERT INTO medico
	        VALUES ($id_medico, '$nome', '$crm', $id_especialidade)";

$total = $dbh->exec($sql);

echo $total;
