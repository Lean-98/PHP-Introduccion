<?php include 'includes/header.php';

$nombreCliente = "Leandro Bazan";

// Conocer una Extención de un String
// Son utiles cuando se valida un formulario para revisar que no esten vacias.
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertirlo a mayuscula
echo strtoupper($nombreCliente);

// Convertirlo en minuscula
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1 === strtolower($mail2)));

echo str_replace('Leandro', 'Leeo', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Pablo');

$tipoCliente = "Premium";
echo "<br/>";
// Forma de concatenar . en PHP 
echo "El Cliente " . $nombreCliente. " es " .$tipoCliente; 

// Actua como Template String JS : Solo funciona con llaves dobles ", no con sencillas '.
echo "<br/>";
echo "El Cliente {$nombreCliente} es {$tipoCliente} ";

include 'includes/footer.php';