<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Televisión'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Headsets', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,2,6);
sort($numeros); // De menor a mayor
rsort($numeros); // De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "<pre/>";

// Ordenar arreglo asociativo
$cliente = array (
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Leandro'
);

echo "<pre>";
var_dump($cliente);
echo "<pre/>";

asort($cliente); // Ordena por valores (orden alfabetico)
arsort($cliente); // Ordena por valores (Z primero)
ksort($cliente); // Ordena por llaves (orden alfabetico)
krsort($cliente); // Ordena por llaves (orden alfabetico, DE LA Z a la A)

echo "<pre>";
var_dump($cliente);
echo "<pre/>";



include 'includes/footer.php';