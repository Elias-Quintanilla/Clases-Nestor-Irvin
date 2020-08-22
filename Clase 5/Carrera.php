<?php
//Definiendo el array
$careers = [
    'Elías' => 'Ingeniería en sistemas',
    'Emerson' => 'Administración de empresas',
    'David' => 'Diseño gráfico',
    'Álvaro' => 'Derecho',
    'Alfredo' => 'Ingeniería industrial'
];
foreach ($careers as $name => $career) {
    echo "El estudiante $name está estudiando $career <br/>";
}
?>