<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 32"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo 24"',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$" . $producto['precio']; ?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?> </p>
        <?php
        // if($producto['disponible']){
        //     echo '<p>Disponible</p>';
        // } else {                       Es lo mismo que el código de arriba 
        //     echo '<p>No Disponible</p>';
        // }
        echo "<pre>";
        var_dump($producto);
        echo "</pre>";
        ?>
        </li>
            <?php
}

// con código html 
/*  echo "<li>";
echo "Titulo del Prodcuto";
echo "</li>";*/

include 'includes/footer.php';