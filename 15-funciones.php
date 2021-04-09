<?php 

//Esto nos permite declarar el modo estricto para tipos escalares en un archivo de PHP
declare(strict_types=1);

include 'includes/header.php';

//Funciones

//Declaracion de funciones

//Parametros con valores por default
function sumar($a=0, $b=0){
    echo"<br>". $a + $b;
}

//Parametros en funciones
function restar($a, $b){
    echo "<br>". $a - $b;
}

//Llamada a las funciones
sumar(10, 20);
restar(10, 20);
sumar();        //Se aplican los valores por default

include 'includes/footer.php';