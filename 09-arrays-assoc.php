<?php include 'includes/header.php';

/* Arreglos asociativos. 
son equivales a los objetos en JavaScript, accedes a los elementos por medio de una propiedad
*/

$cliente = [
    'nombre' => 'Agner',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100,
    ]
];

//La etiqueta pre le da formato de impresion al arreglo
echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo"<br>"; //Salto de línea

//Acceder a una propiedad del arreglo asociativos
echo $cliente['nombre'];

echo"<br>"; //Salto de línea

echo $cliente['saldo'];

echo "<br>"; //Salto de línea

echo $cliente['informacion']['tipo'];

echo "<br>"; //Salto de línea

echo $cliente['informacion']['disponible'];

//Agregar propiedades a un arreglo asociativo
$cliente['id'] = 1;

$cliente['direcciones'] = [
    'direccion1' => 'sdfasdfsa',
    'direccion2' => 'ssdfds',
    'direccion3' => 'gfhdgf',
];

//Crea el nombre de la propiedad en una variable
$telefono = 'telefono';
//Agrega una propiedad con una variable
$cliente[$telefono] = 1234567891;

//Cambiar el valor de una propiedad de un arreglo asociativo
$cliente['nombre'] = 'Alexis';

//La etiqueta pre le da formato de impresion al arreglo
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';