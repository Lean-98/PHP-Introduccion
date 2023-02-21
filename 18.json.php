<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Monitor 22° 75hz',
        'precio' => 199,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor IPS 24° 144hz',
        'precio' => 499,
        'disponible' => true
    ],
    [
        'nombre' => 'Monítor Curvo 34° 2k 120hz',
        'precio' => 699,
        'disponible' => false
    ]
];

// json_encode convierte un arreglo a un String.
echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // Tipo de conversión en el JSON, Constante de PHP para incluir acentos

//json_decode convierte un String a un arreglo
$json_array = json_decode($json); 

var_dump($json);
var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';