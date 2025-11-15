<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un array o arreglo
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder  a un elemento del array
echo $carrito[1];

$carrito[3] = 'Nuevo Producto'; // agrega un elemento nuevo 

// Añade un elemnto nuevo al final
array_push($carrito, 'Audifonos');

// Añadir al inicio 
array_unshift($carrito, 'Smartwatch');


echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');

echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';