<?php include 'includes/header.php';

// Arreglos indexados
// $carrito = [];
// $carrito = array();

$carrito = ['Tablet', 'Smart TV', 'Computadora'];

// La etiqueta pre cambia el formato para ver los resultados de una consulta en un db o revisar los elementos que existen en un arreglo.
// Util para ver el contenido de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto';

// Funciones para agregar elementos al final del arreglo o al inicio
// Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

// Añadir al inicio
array_unshift($carrito, 'SmartWatch');

// Util para ver el contenido de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$carrito2 = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($carrito2);
echo "</pre>";

echo $carrito2[2];

include 'includes/footer.php';