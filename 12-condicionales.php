<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

// || operador O
// && operador AND
if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente";
}else {
    echo "Usuario no autenticado, iniciar sesión";
}

// If anidados...
$cliente = [
    'nombre' => 'Alexis',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
    ];

if(empty($cliente)) {
    echo "El arreglo de cliente esta vacio";
} else {
    echo "El arreglo de cliente no esta vacio";
}

echo"<br>";

if( !empty($cliente)) {  // Revisa que tengamos un cliente
    echo "El Arreglo del cliente no esta vacio";

    if($cliente['saldo'] > 0) { // Revisa alguna propiedad de este cliente
        echo "El Cliente tiene saldo disponible!";
    } else {
        echo "No hay saldo!";
    }
}

echo"<br>";
// else if
if($cliente['saldo'] > 0 ) {
    echo "El cliente tiene saldo!";

} else if ($cliente['informacion']['tipo'] === 'Premium'){
    echo "El Cliente es Premium";
}else {
    echo "No hay Cliente definido";
}


// Switch
echo"<br>";
$tecnologia = 'JavaScript';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la Web!";
        break;
        case 'HTML':
            echo "Emmmmm...";
            break;    
    default:
        echo "Algún lenguaje que no se cual es";
        break;    
}


include 'includes/footer.php';