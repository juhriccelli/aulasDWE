<?php
	require_once('../bd/conexao.php');

	$id_medico        = $_POST['id_medico'];
	$nome             = $_POST['nome'];
	$crm              = $_POST['crm'];
	$id_especialidade = $_POST['id_especialidade'];

	$sth = $dbh->prepare('INSERT INTO medico
		                    VALUES (?, ?, ?, ?)'
		                  );
	try{
		$sth->execute([$id_medico, $nome, $crm, $id_especialidade]);
	}catch(PDOException $e) {
		echo $e->getMessage();
	}