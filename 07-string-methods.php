<?php include 'includes/header.php';

$nombreCliente = '  Javier Solis';

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo "<br/>";

//Eliminar espacios en blanco 
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br/>";

//Convertirlo a Mayúsculas 
echo strtoupper($nombreCliente);
echo "<br/>"; 

// Convertirlo en minusculas 
echo strtolower($nombreCliente);
echo "<br/>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

// VAlorar si es o no el mismo id o usuario 
var_dump(strtolower($mail1) === strtolower($mail2));

//Cambiar un carácter o carácteres de un string
echo str_replace('Javier', 'J', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, "Javier"); // Enumera los espacios en blanco
echo "<br/>";

$tipoCliente = "Premium";
echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br/>";

echo "El Cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';