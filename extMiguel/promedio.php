<?php
$numbers = array(3,2,4,5,7,2,6);
$suma = 0;
foreach ($numbers as $number) {
    $suma += $number;
}
$tamaño = count($numbers);
$promedio = $suma / $tamaño;
echo "promedio: $promedio";
?>