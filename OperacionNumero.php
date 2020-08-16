<?php
//Obteniendo datos y declarando variables
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

//Haciendo la operación
if($n1 > $n2) {
    $resta = $n1 - $n2;
    echo "Como el primer número es mayor se realiza una resta y el resultado es " . $resta;
} elseif($n2 > $n1) {
    $suma = $n2 + $n1;
    echo "Como el segundo número es mayor se realiza una suma y el resultado es " . $suma;
} elseif($n1 == $n2) {
    $multi = $n1 * $n2;
    echo "Como ambos números son iguales se realiza una multiplicación y el resultado es " . $multi;
}
?> 