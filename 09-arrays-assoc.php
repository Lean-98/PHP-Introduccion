<?php include 'includes/header.php';

// Associative Arrays
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 100
        ]
    ];

    echo "<pre>";
    var_dump($cliente['informacion']);
    echo "</pre>";
    
    // echo $cliente['nombre'];
    // echo $cliente['informacion']['disponible'];

$cliente['nombre'] = 1215165165;

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';