<?php
include ('../classes/Usuario.php');

$usrnombre=$_POST("uid");
$usrclave=$_POST("pwd");

$oUsuario=new Usuario($usrnombre, "", $usrclave);

echo $usrnombre."".$usrclave;