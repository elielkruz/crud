<?php
	include("config.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO usuarios 
						(nome, email, cpf, data_nascimento)
					VALUES
						('".$_POST["nome"]."','".$_POST["email"]."','".$_POST["cpf"]."','".$_POST["data_nascimento"]."')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE usuarios SET
						nome='".$_POST["nome"]."',
						email='".$_POST["email"]."',
						cpf='".$_POST["cpf"]."',
						data_nascimento='".$_POST["data_nascimento"]."'
					WHERE
						id=".$_POST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível excluir.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;
	}
?>