<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if ($autenticado || $admin) {
    echo "Está autenticado";
} else {
    echo "No está autenticado";
}

echo "<br>"; //Salto de línea

$autenticado = false;

if ($autenticado && $admin) {
    echo "Está autenticado";
} else {
    echo "No está autenticado";
}

//if anidados

$cliente = [
    'nombre' => 'Agner',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'normal'
    ]
];

echo "<br>"; //Salto de línea

if (!empty($cliente)) {
    echo "El arreglo de cliente no está vacío";

    echo "<br>"; //Salto de línea
    if ($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
    }else{
        echo "No hay saldo";
    }
}

echo "<br>"; //Salto de línea

//elseif

if ($cliente['saldo'] > 0) {    
    echo "El cliente tiene saldo disponible";
} else if($cliente['informacion']['tipo'] === 'premium' ){
    echo "El cliente es premium";
} else{
    echo "No hay cliente o no tiene saldo o no es premium";
}

echo "<br>"; //Salto de línea

//Switch

$tecnologia = 'PHP';    //Cambiar el valor de la variable para revisar las demás opciones

switch ($tecnologia) {
    case 'PHP':
        echo "Elegiste PHP";
        break;
    case 'JavaScript':
        echo "Elegiste JavaScript";
        break;
    case 'Python':
        echo "Elegiste Python";
        break;
    default:
        echo "Tu elección esta fuera de las opciones";
        break;
}

include 'includes/footer.php';