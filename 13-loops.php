<?php include 'includes/header.php';

// // Loops permiten ejecutar cierto código derminada cantidad de veces.
// // While -Se va a ejecutar hasta que una condición sea evaluada como falsa.

// $i = 0; // Inicializador

// while($i < 10) {
//     echo $i . "<br>";

//     $i++; // Incremento
// }

// echo "<br>";
// // Do While - Se ejecuta hasta que una condición sea evaluada como falsa, pero primero ejecuta el código y dps lo evalua

// $i = 0;

// do {
//     echo $i. "<br>";

//     $i++;
// } while($i < 10);


// echo "<br>";
// // For Loop - Se ejecuta mientras que una condición sea evaluada como verdadera o hasta que una condición sea evaluada como falsa.
// for($i = 0; $i < 15; $i++) {
//  echo $i . "<br>";
// }

// echo "<br>";
// /**
//  * 3 imprimir Fizz
//  * 5 imprimir Buzz
//  * 3 y 5 imprimir FIZZ BUZZ
//  */


//  for ($y = 1; $y <= 500; $y++) {
//     if ( $y % 3 === 0 && $y % 5 === 0) {
//         echo $y . "-FIZZ BUZZ <br/>";
//         } else if( $y % 3 === 0) {
//             echo $y . "-Fizz <br/>";
//         } else if ( $y % 5 === 0) {
//             echo $y . "-Buzz <br/>";
//         } else {
//             echo $y . "<br/>";
//         }
//  }


// For Each
$clientes = array ('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ) {
    echo $cliente . '<br/>';
}

// for($i = 0; $i < count($clientes); $i++) {
//     echo $cliente[$i] . '<br/>';
// }

$cliente = [
    'nombre' => 'Juan',
    'saldo'  => 200,
    'tipo'  => 'Premium'
];

foreach( $cliente as $key => $valor ) {
    echo $key. " : " . $valor . '<br/>';
}


include 'includes/footer.php';