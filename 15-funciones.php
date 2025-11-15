
<?php 
declare(strict_types=1);;  // obliga a que los tipos de datos pasados a las funciones, coincidan con los tipos declarados
include 'includes/header.php';
function sumar(int $numero1, int $numero2){
    echo $numero1 + $numero2;
}

sumar(50, 80);

include 'includes/footer.php';