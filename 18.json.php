<?php include 'includes/header.php';

//Trabajar con json

//Arreglo asociativo
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Iphone',
        'precio' => 300,
        'disponible' => false
    ],
    [
        'nombre' => 'Zapato',
        'precio' => 2000,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 2000,
        'disponible' => true
    ],
];

echo"<pre>";
var_dump( $productos);

//Convierte un arreglo asociativo en un archivo json para ser leido por JavaScript
//JSON_UNESCAPED_UNICODE es una constante para que aparescan los acentos en el json
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump( $json);

//Convierte el formato jsona un arreglo asociativo para ser utilizado dentro del programa
$json_array = json_decode($json);
var_dump($json_array);

echo"</pre>";

include 'includes/footer.php';