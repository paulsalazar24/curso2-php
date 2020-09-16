<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class usuario
{
    /*
* @var int
*/
    public int $id;
    /*
@var array
    */
    public array $usuarios;

    public function __construct(int $id)
    {
    }
}
$usuario = new usuario(1);
var_dump($usuario);