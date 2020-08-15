<?php
//Definiendo variables
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

//Haciendo los operaciones
$suma = $n1 + $n2;
$resta = $n1 - $n2;
$multi = $n1 * $n2;
$divi = $n1 / $n2;

//Imprimiendo los resultados
echo "La suma de ambos números es " . $suma . "<br/>";
echo "La resta de ambos números es " . $resta . "<br/>";
echo "La multiplicación de ambos números es " . $multi . "<br/>";
echo "La división de ambos números es " . $divi . "<br/>";
?>