<?php

if(isset($_POST['enviar'])){

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$msg = $_POST['msg'];


	$sqlInsert = "INSERT INTO cliente (nome, cpf, email, telefone, msg) VALUES ('".$nome."','".$cpf."','".$email."','".$telefone."','".$msg."');";

	mysqli_query($link, $sqlInsert);

	if(mysqli_affected_rows($link) > 0){
		echo "Enviado com sucesso!";
	}
	else{
		echo "Erro ao enviar!";	
		echo "<textarea>".$sqlInsert."</textarea>";
	}
}

?>