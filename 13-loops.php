<?php include 'includes/header.php';

// While
$i = 0;

while ($i < 0):

    echo $i . "<br>";

    $i++; // incremento
endwhile;

echo "<br>";
// Do while
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while ($i < 10);

/**
 * 3 imprimir Fizz
 * 5 Imprimir Buzz
 * 3 y 5 imprimir Fizz Buzz
 */

// for loop.
for ($i = 1; $i < 50; $i++):
    if ($i % 3 === 0 && $i % 5 === 0):
        echo $i . " - FIZZ BUZZ <br/>";
    elseif ($i % 3 === 0):
        echo $i . " - Fizz <br/>";
    elseif ($i % 5 === 0):
        echo $i . " - Buzz <br/>";
    endif;
endfor;

// For Each 
$clientes = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente):
    echo $cliente . '<br/>';
endforeach;

$cliente = [
    'nombre' => 'Juan', 
    'saldo'=> 200,
    'tipo' => 'Premium'
];

foreach ($clientes as $key => $valor):
    echo $key . " - " . $valor . '<br/>';
endforeach;
/*
for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . "<br/>";
}
*/
include 'includes/footer.php';