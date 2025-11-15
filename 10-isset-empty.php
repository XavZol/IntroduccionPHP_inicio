<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Javier', 'Karen');
$cliente = [
    'nombre' => 'Javier',
    'saldo' => 200
];

//Empty / revisa si un arreglo esta vacio 
var_dump(empty($clientes));
var_dump(empty($clientes3));
var_dump(empty($clientes2));

// isset - Revisar si un arreglo esta cerrado o una propiedad esta definida
echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));

// isset - permite revisar si una propiedad de un arreglo asociativo, existe
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));
var_dump(isset($cliente3[300]));

include 'includes/footer.php';