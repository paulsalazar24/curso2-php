<?php
$usuario = "Israel parra";

echo $usuario;

$usuario = "cursosdesarrolladoresweb";

echo "<br />";

echo $usuario;

$edad = 39;

echo $edad;

echo "<br />";

$previoCurso = 9.99;

echo $previoCurso;

echo "<br />";

$tecnologias = [
    "php", "javascript", "vuejs", "laravel", "react"
];
echo "<pre> var_dump($tecnologias) </pre>";

echo "<br>";

echo $tecnologias[2];

echo "<br>";

$usuarioObjeto = new stdClass;
$usuarioObjeto->nombre = "Isarael parra";
$usuarioObjeto->edad = 39;

echo "<pre>";
var_dump($usuarioObjeto);
echo "</pre>";
echo $usuarioObjeto->nombre;