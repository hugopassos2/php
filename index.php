<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


/*//Carrega um usuário
$user = new Usuario();

$user->loadById(3);

echo $user;*/


/*//Carrega uma lista de usuários
$lista = Usuario::getList();

echo json_encode($lista);*/

/*//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("user", "12345");
echo $usuario;


?>