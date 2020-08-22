<?php
//Obteniendo datos y declarando variables
$n1 = $_POST['n1'];

//Realizando operación
if ($n1%2==0) {
    echo "El número " . $n1 . " es par. <br/>"; 
} else {
    echo "El número " . $n1 . " es impar. <br/>";
}
while ($n1 > 0) { 
        echo $n1 . "<br/>";

        $n1--;
}
?>