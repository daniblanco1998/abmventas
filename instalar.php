<?php

include_once "config.php";
include_once "entidades/usuario.php";

$usuario = new Usuario();
$usuario->usuario = "daniblanco";
$usuario->clave = $usuario->encriptarClave("dani1234");
$usuario->nombre = "Daniel";
$usuario->apellido = "";
$usuario->correo = "danieloropeza98sc@gmail.com";
$usuario->insertar();


echo "Usuario insertado.";
?>