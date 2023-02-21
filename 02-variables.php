<?php include 'includes/header.php';


$nombre = "Juan";
// $_nombre = 'Pedro';
// $nombre_ = 'Felix';
$nombre = "Juan Pablo";
// Las variables comienzan con el signo $ y pueden empezar o terminar con _ , pero no pueden iniciar con numeros.
// echo $_nombre;
// echo $nombre_;
echo $nombre;       // Imprime solo el valor
var_dump($nombre);  // Imprime el valor + info de la variable

// Constante
define('constante', "Este es el valor de la constante");
echo constante;
// Esta sintaxis no es tan comun
const constante2 = "Hola 2";
echo constante2;

//Formas de darle nombre tanto a variables como funciones
$nombreCliente = "Leopoldo";  // Se usa más en JS
$nombre_cliente = "Leonel";   // Uso frecuente en PHP

include 'includes/footer.php';
