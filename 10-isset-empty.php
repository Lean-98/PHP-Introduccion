<?php include 'includes/header.php';

$clientes = [];
$clientes = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];
// Empty -Revisa si un arreglo esta vacio o no.
var_dump(empty($clientes));
var_dump(empty($clientes3));

// Isset -Revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes3));
// Isset - permite revisar si una propiedad de un arreglo asociativo, existe!
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['Código']));


include 'includes/footer.php';