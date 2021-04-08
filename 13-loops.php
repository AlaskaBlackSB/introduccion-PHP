<?php include 'includes/header.php';

//Ciclo while

$cont = 0; //Contador

//Ciclo que imprime los numeros del 0 al 9
while ($cont < 10) {
   echo $cont."<br>";
   $cont++;
}

echo "<br>"; //Salto de línea

//Ciclo Do While
$cont  = 0; //Contador

//Ciclo que imprime los numeros del 0 al 9
do {
    echo $cont."<br>";
    $cont++;
} while ($cont < 10);

echo "<br>"; //Salto de línea

//Ciclo for

//Ciclo que imprime los numeros del 0 al 9
for ($i=0; $i < 10; $i++) { 
    echo $i."<br>";
}

echo "<br>"; //Salto de línea

/* 
FizzBuzz es una de la pruebas más comunes a las que te vas a enfrentar al buscar un trabajo de programación.

En FizzBuzz se te pide imprimir los números del 1 al 100, exceptuando los múltiplos de 3 (donde debes imprimir “Fizz”) y los múltiplos de 5 (donde debes imprimir “Buzz”). Si son divisibles por 3 y 5 se debe imprimir “FizzBuzz” 
*/

echo "Prueba FizzBuzz <br>";

//Ciclo que imprime los numeros del 0 al 9
for ($i=1; $i < 101; $i++) { 
    if ($i % 3 === 0 && $i % 5 === 0) { //Comprobar que el numero actual sea multiplo de 3 y 5
        echo "(".$i.") FizzBuzz <br>";
    } else if ($i % 5 === 0) {          //Comprobar que el numero actual sea multiplo de 5
        echo "(".$i.") Buzz <br>";
    } else if($i % 3 === 0){            //Comprobar que el numero actual sea multiplo de 3
        echo "(".$i.") Fizz <br>";
    } else{
        echo $i."<br>";
    }
}




include 'includes/footer.php';