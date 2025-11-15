<?php include 'includes/header.php';

// While
$i = 100;

while ($i < 0) {

    echo $i . "<br>";

    $i++; // incremento
}

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
for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . " - FIZZ BUZZ <br/>";
    } else if ($i % 3 === 0) {
        echo $i . " - Fizz <br/>";
    } else if ($i % 5 === 0) {
        echo $i . " - Buzz <br/>";
    }
}


include 'includes/footer.php';