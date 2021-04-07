<!-- Distintas formas de imprimir -->
<!-- Con PHP puedes incluir archivos html para no repetir codigo -->
<?php include 'includes/header.php' ?>


<?php
    //La función echo puede inyectar codigo html
    echo "Hola mundo";
?>

<!-- Puedes abrir y cerrar codigo php en cualquier momento y asi poner codigo html -->
<br>

<?php 
    echo("Hola Mundo");

    print("Hola Mundo");

    print"Hola mundo";

    print_r("Hola Mundo");

    var_dump("Hola Mundo");

    include 'includes/footer.php' 
?>