<?php
//Obteniendo datos y declarando variable
$n1 = $_POST['n1'];
$factorial = 1;

//Haciendo la operación
if($n1 >= 0) {
    while ($n1 > 1) {
        $factorial = $factorial * $n1;
        $n1--;
        echo "El factorial es igual a " . $factorial . "<br/>";
    }
} else {
    echo "El número es negativo, no se puede calcular.";
}
?>