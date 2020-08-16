<?php
//Obteniedno datos y declarando variables
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

//Haciendo la operación
$potencia = $n1 ** $n2;

//Imprimiendo el resultado
echo "El número " . $n1 . " potenciado a " . $n2 . " el resultado es " . $potencia;
?>