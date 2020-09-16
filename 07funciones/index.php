<?php
function holaMundo(): string
{
    return "hola mundo con el sharingan";
}

echo holaMundo();

echo "<br>";
// se muestra una funcion anonima

$holaMundo = function (): string {
    return "hola mundo con el sharingan";
};

echo holaMundo();
echo "<br>";
// funcion con parametros
function saluda(string $nombre = "cursosdesarrolloweb"): string
{
    return sprintf('Hola %s', $nombre);
}
echo saluda();

echo "<br>";

function integer_division(...$ints): int
{
    return intdiv($ints[0], $ints[1]);
}

echo integer_division(10, 4);

echo "<br>";

function recorrer_usuarios(...$usuarios): string
{
    $resultado = '';
    foreach ($usuarios as $usuarios) {
        $resultado .= "<br>{$usuarios}";
    }
    return $resultado;
}

echo recorrer_usuarios("usuario1", "usuario2", "usuario3");

echo "<br>";

function recorrer_usuarios_list($usuarios = []): string
{
    $resultado = '';
    foreach ($usuarios as $usuarios) {
        list($id, $nombre, $apellido) = $usuarios;
        $resultado .= "<br>{$id}, {$nombre}, {$apellido}";
    }
    return $resultado;
}

$usuariosComplejos = [
    [1, "israel", "parra"],
    [2, "juan", "lopez"],
    [3, "sofia", "garcia"],
    [4, "daniel", "jumenez"]
];
echo recorrer_usuarios_list($usuariosComplejos);