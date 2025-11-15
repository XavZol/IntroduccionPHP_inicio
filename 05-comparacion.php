<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 == $numero4);
echo "<br/>";

var_dump($numero2 === $numero4);
echo "<br/>";

var_dump($numero2 <=> $numero3); 
echo "<br/>";
// si el numero de la izquierda es menor al otro nos va a dar -1, 0 si es igual y 1 si es mayor que el de la derecha 

var_dump($numero2 <=> $numero1); 
echo "<br/>";


include 'includes/footer.php';