<?php
//Obteniendo datos y declarando variables
$word1 = $_POST['palabra1'];
$word2 = $_POST['palabra2'];

//Haciendo la operación
if($word1 == $word2) {
    echo "Ambas palabras son iguales.";
} else {
    echo "Las palabras no son iguales";
}
?>