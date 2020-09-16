<?php
$a = 2;
$b = 2;
if ($a < $b) {
    echo "A es menor que B";
} elseif ($a === $b) {
    echo "A es igual que B";
} else {
    echo "A no es mayor que B";
}

echo "<br>";

$nombre = null;
echo $nombre ? $nombre : "cursos";

echo "<br>";

$nombre = "cursosodesarrolloweb";
echo $nombre ?? "cursos";

echo "<br>";

$mes = 3;
switch ($mes) {
    case 1:
        echo "enero";
        break;
    case 2:
        echo "febrero";
        break;
    case 3:
        echo "marzo";
        break;
    case 4:
        echo "abril";
        break;
    case 5:
        echo "mayo";
        break;

    default:
        echo "error";
        break;
}