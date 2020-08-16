<?php
//Obteniendo datos y declarando variables
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

//Haciendo la operación
$modulo = $n1 % $n2;

//Imprimiendo el resultado
echo "El módulo del número " . $n1 . " entre " . $n2 . " es " . $modulo;
?>