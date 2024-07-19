<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HOLA MUNDO DATW!!!</h1>
    <h2>
    <?php
    //Comentario de línea

    /**
     * Comentarios de bloque
     */

    #Comentario de línea

    $a = 3;
    $b = 5;
    $c = $a + $b;

    echo "El resultado de la suma es " . $c; //Se concatena con .(punto) o ,(coma). Aquí el + no funciona
    echo "<br>El resultado de $a + $b =  $c";

    $nombre = "<br>Juana";
    $nombre .= " Díaz<br>"; //Se puede concatenar en la misma variable con .=
    echo $nombre;
    echo "<br>" . gettype($nombre); //gettype te devuelve en tipo de variable que es
    echo "<br>" . gettype($a); //Las funciones hay que concatenarlas con .

    const PI = 3.1416;
    define("IVA", 21); //Declaración de CONSTANTES, las 2 son válidas

    echo "<br>" .__LINE__ ."<br>"; //Te muestra la línea en la que estás

    /**
     * Variables generadas dinámicamente
     */

    $m_en = "Hello";
    $m_es = "Hola";
    $m_it = "Ciao";
    //Variable para definir el idioma que vamos a usar
    $idioma = "es";
    //Variable con el nombre generado dinámicamente
    $bienvenida = "m_" . $idioma;
    //Lo que va a mostrar de la variable:
    echo "¡".$$bienvenida."!";


    /**
     * CASO PRÁCTICO 1
     */

    $r = 10;
    $radio = 2 * PI * $r;
    echo "<br><h1>";
    echo $radio;
    echo "<br>";

    printf("%0.2f", $radio);
    echo "</h1>";





    ?>
    </h2>
</body>
</html>
