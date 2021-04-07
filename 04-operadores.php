<?php include 'includes/header.php';

$precio = 15;
$cantidad = 20;
$resultado = 0;

//Suma
$resultado = $precio + $cantidad;;
echo $resultado;

echo "<br>"; //Salto de línea

//Resta
$resultado = $precio - $cantidad;
echo $resultado;

echo "<br>"; //Salto de línea

//Multiplicación
$resultado = $precio * $cantidad;
echo $resultado;

echo "<br>"; //Salto de línea

//División
$resultado = $precio / $cantidad;
echo $resultado;

//Potencia
$resultado = 2**3; //2^3

include 'includes/footer.php';