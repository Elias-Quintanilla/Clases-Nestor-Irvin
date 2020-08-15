<?php
//Obteniendo datos y declarando variables
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

//Haciendo la operación
if($n1 > $n2 && $n1 > $n3) {
    echo "El número " . $n1 . " es el número mayor.";
} elseif($n2 > $n1 && $n2 > $n3) {
    echo "El número " . $n2 . " es el número mayor.";
} else {
    echo "El número " . $n3 . " es el número mayor.";
}
?>