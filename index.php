<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");


echo json_encode($usuarios); */

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyID(3);
//echo $root;

//Carrega lista de usuarios
//$lista = usuario::getList();
//echo json_encode($lista);

//carrega lista de usuarios pelo login
//$search = Usuario::search("no");
//echo json_encode($search);


//Carrega usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("Bruno", "123456");
//echo $usuario;
/*
//Criando novo usuario
$aluno = new Usuario();

$aluno->insert();

echo $aluno;*/

$usuario = new Usuario();

$usuario->loadbyID(5);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;


 ?>