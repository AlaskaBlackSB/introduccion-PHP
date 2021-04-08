<?php include 'includes/header.php';

//Array indexado
$nombres = array("Agner", "Alexis", "Plasencia", "Amador");

//For each para recorrer arreglos arreglos indexados
foreach ($nombres as $nombre){
    echo $nombre."<br>";
}

//Array asociativo
$cliente = [
    'nombre' => 'Agner',
    'saldo' => 200,
    'tipo' => 'Premium'
];
//El foreach itera sobre los valores de cada propiedad no sobres las llaves
foreach ($cliente as $valor){
    echo $valor."<br>";
}

//Para iterar tambien sobre las llaves se utiliza un $key
foreach ($cliente as $key => $valor){
    echo $key."-".$valor."<br>";
}

/* Ejemplo foreach del mundo real */

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
];

echo "<br>"; //Salto de línea

//foreach para recorrer el arreglo de productos
foreach ($productos as $producto){ ?>
    <!--Combinación de codigo HTML con PHP -->
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?>  </p>
        <p>Precio: $ <?php echo $producto['precio']; ?>  </p>
        <p>Disponible: <?php echo ($producto['disponible']) ? "Si" : "No"; ?> </p>
    </li>

    <?php
}

include 'includes/footer.php';