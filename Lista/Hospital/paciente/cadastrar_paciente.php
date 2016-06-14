<?php
	require_once('../bd/conexao.php');

	$id_paciente      = $_POST['id_paciente'];
	$nome             = $_POST['nome'];
	$cpf              = $_POST['cpf'];
	$data_nascimento  = $_POST['data_nascimento'];
	$sexo             = $_POST['sexo'];

	$sth = $dbh->prepare('INSERT INTO paciente
		             VALUES (:id, :nome, :cpf, :dt, :sexo)');

	$vetor = array(
		'nome' => $nome,
		'cpf' => $cpf,
		'dt' => $data_nascimento,
		'sexo' => $sexo,
		'id' => $id_paciente
		);

	$sth->execute($vetor);
        
        
    include("../Testes/validaCPF.php");

