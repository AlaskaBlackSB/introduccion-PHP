<?php include 'includes/header.php';

$a = 1234;
$b = 123;
$c = 123;
$d = "123";

if ($a > $b) {
    echo "a(", $a ,") es mayor a b(", $b, ")";
} else {
    echo "a(", $a ,") no es mayor a b(", $b, ")";
}

echo "<br>"; //Salto de línea

if ($a < $b) {
    echo "a es menor a b";
} else {
    echo "a no es menor a b";
}

echo "<br>"; //Salto de línea

if ($a <= $b) {
    echo "a es menor o igual a b";
} else {
    echo "a no es menor o igual a b";
}

echo "<br>"; //Salto de línea

if ($a >= $b) {
    echo "a es mayor o igual a b";
} else {
    echo "a no es mayor o igual a b";
}

echo "<br>"; //Salto de línea

if ($a == $b) {
    echo "a es igual a b";
} else {
    echo "a no es igual a b";
}

echo "<br>"; //Salto de línea

//Este comparador hace un cast para que las dos variables sean de l mismo tipo y despues compara
if ($c == $d) {
    echo "c es igual a d";
} else {
    echo "c no es igual a d";
}

echo "<br>"; //Salto de línea

//Compara datos del mismo tipo
if ($c === $d) {
    echo "c es igual a d";
} else {
    echo "c no es igual a d";
}

echo "<br>"; //Salto de línea

/* Comparador <=>:
    -Devuelve -1 si el numero de la izquierda es menor al de la derecha
    -Devuelve 0 si el numero de la izquierda igual al de la derecha
    -Devuelve 1 si el numero de la izquierda es mayor al de la derecha
*/

//Devuelve -1
var_dump($b <=> $a);

echo "<br>"; //Salto de línea

//Devuelve 0
var_dump($b <=> $c);

echo "<br>"; //Salto de línea

//Devuelve 1
var_dump($a <=> $b);

include 'includes/footer.php';