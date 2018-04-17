<?php 

require_once("config.php");
/*
//Carrega apenas um usuario
$root = new Usuario();
$root->loadbyId(3);
echo $root;


//Carrega uma lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);


//carrega uma lisca com usuarios buscando pelo login
$search = Usuario::search("oo");
echo json_encode($search);
*/

//Carrega usuario usando login e senha
$usuario = new Usuario();
$usuario->login("root", "!@#$%");
echo $usuario;


 ?>