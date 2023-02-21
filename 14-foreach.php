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
        'nombre' => 'Monitor Curvo 34° 2k 120hz',
        'precio' => 699,
        'disponible' => false
    ]
];

foreach( $productos as $producto) { ?>
<li>
    <p>Producto: <?php echo $producto['nombre']; ?></p>
    <p>Producto: <?php echo $producto['precio']; ?></p>
    <p><?php echo ($producto['disponible']) ? 'En Stock' : 'Sin Stock' ?></p> <!--operador ternario -->
</li>
<?php  
}

// <?php
//         if($producto['disponible']) {
//             echo "<p>Disponible</p>";
//         }else {
//             echo "<p>No disponible!</p>";
//         }
// ?<

include 'includes/footer.php';