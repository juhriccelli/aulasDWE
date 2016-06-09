<?php
require_once('../bd/conexao.php');

$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO paciente
	        VALUES ($id_paciente, '$nome',
	                '$cpf', '$data_nascimento', '$sexo')";

$total = $dbh->exec($sql);

echo $total;
