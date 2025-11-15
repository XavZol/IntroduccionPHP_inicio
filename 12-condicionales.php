<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if ($autenticado && $admin) {
    echo "\nUsuario autenticado correctamente";
} else {
    echo "\nUsuario no autenticado, inicia sesión";
}

// if anidados
$cliente = [
    'nombre' => 'Javier',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<br>";

if (!empty($cliente)) {
    echo "\nEl arreglo del cliente esta vacio";

    if ($cliente['saldo'] > 0) {
        echo "\r\nEl saldo del cliente esta disponible";
    } else {
        echo "\r\nNo hay saldo";
    }
} else {
    echo "\nEl arreglo del cliente no esta vacio";
}

echo "<br>";

//else if
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium'){
    echo "El Cliente es Premium";
} else {
    echo "No hay Cliente no es Premium";
}

// Switch.
echo "<br>";
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP un excelente lenguaje: ";
        break;
    case 'Javascript':
        echo "Buen Lenguaje";
        break;
    case 'HTML':
        echo "Desarrollo Web";
        break;

    default:
        echo "Algun lenguaje deconocido: ";
        break;      
}

include 'includes/footer.php';