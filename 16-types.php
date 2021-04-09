<?php 

//Esto nos permite declarar el modo estricto para tipos escalares en un archivo de PHP
declare(strict_types=1);

include 'includes/header.php';

//Funcion que retorna un valor
//Puedes definir el tipo de dato que se va a retornar o no, el definir el tipo de dato de retorno es opcional
function usuarioAutenticado(bool $autenticado) : string {
    if ($autenticado) {
        return "<br>El usuario está autenticado";
    } else {
        return "<br>El usuario no está autenticado";
    }   
}

//Retorno opcional, solo funciona cuando se retorna null
function usuarioAutenticado2(bool $autenticado) : ?string{
    if ($autenticado) {
        return "<br>El usuario está autenticado";
    } else {
        return null;
    }   
}

//Especificar diferentes retornos
//La funcion puede retornar un string o un entero
function usuarioAutenticado3(bool $autenticado) : string | int{
    if ($autenticado) {
        return "<br>El usuario está autenticado";
    } else {
        return 0;
    }   
}

$usuario = usuarioAutenticado(true);
echo "<br>".$usuario;
$usuario = usuarioAutenticado(false);
echo "<br>".$usuario;
$usuario = usuarioAutenticado2(false);
echo "<br>".$usuario;
$usuario = usuarioAutenticado3(false);
echo "<br>".$usuario;





include 'includes/footer.php';