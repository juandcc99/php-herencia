<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>POO PHP</title>
</head>
<body>
    
    <h2>Programacion Orientada a objetos PHP</h2>
<div class="margen">
    <div class="principal">
    <?php
    require_once('clases/Clase1.php');
    require_once('clases/Cliente.php');
    require_once('clases/Producto.php');
    require_once('clases/Articulo.php');
    require_once('clases/Padre.php');
    require_once('clases/Hijo.php');
    require_once('clases/Hija.php');

    

    echo "<h3>Clases y Objetos</h3>";
    echo phpinfo(INFO_GENERAL);

    $objeto = new ClasePropiedades();//Instanciar
    echo "<p>".$objeto->ciudades."</p>";
    echo "<hr>";

    $cliente1 = new Cliente("indra",5,true);
    //echo "<p>".$cliente1->nombre."</p>";
    echo "<p>" .$cliente1->getNombre(). "</p>";
    $cliente1->setNombre("repsol");
    echo "<p>" .$cliente1->getNombre(). "</p>";
    echo "<hr>";

    $producto1 = new Producto(100,"camisa",5,7.99);
    echo "<p>" .$producto1->getPrecio(). "</p>";
    $producto1->setPrecio(7.95);
    echo "<p>" .$producto1->getPrecio(). "</p>";
    echo "<p>" .$producto1->total(). "</p>";
    echo "<hr>";

    $articulo = new Articulo(100,"camisa",5,7.99);
    echo "<p>".$articulo->calcularTotal()."</p>";
    echo "<hr>";

    //$padre = new Padre();
    // echo "<p>".$padre->nombre."</p>";
    //echo "<hr>";

    $hijo = new Hijo("Almansa");
    $hijo->saludar("Hola");
    //echo "<p>".$hijo->ciudad."</p>";
    echo "<hr>";

    $hijo2 = new Hijo("Valencia", "hijo2@gmail.com");
    echo "<p>".$hijo2->ciudad."</p>";
    echo "<p>".$hijo2->email."</p>";
    echo "<hr>";

    $hija1 = new Hija();
    echo "<p>".$hija1->verTareas("algo")."</p>";
    echo "<p>".$hija1->verTareas("urgente")."</p>";
    echo "<p>".$hija1->verTareas("importante")."</p>";
    echo "<p>".$hija1->saludar("Hija1")."</p>"; 
    echo "<hr>";


    $hijo->saludar("Hijo1");

    ?>
    </div>
</div>
</body>
</html>