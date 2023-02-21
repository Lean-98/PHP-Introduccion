<?php 
declare(strict_types = 1 );
include 'includes/header.php';


function sumar (int $numero1 = 0, float $numero2 = 0.0) {
    echo $numero1 + $numero2;
}

sumar(33,67.67);

//Named Parameters en PHP
function restar (float $numero3 = 0.0, float $numero4 = 0.0) {
    echo $numero3 - $numero4;
}

restar(numero4: 99.99, numero3: 97.67);

include 'includes/footer.php';