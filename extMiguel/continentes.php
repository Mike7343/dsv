<?php
/* echo "codigo php ";
echo "<br/>";
$nombre="mike<br>";
$edad=24;
echo $nombre . $edad;

//array


$estado_mexico = array ('Ecatepec', 7, 3.5);


/* $array_alias = array("Continente" => "Africa", "Pais" => "Nigeria");

echo "<br>".$array_alias["Continente"];
echo "<br>".$array_alias["Pais"];

$array_multiple = array(
    array("Mexico", "Brazil", "Colombia")
);
var_dump($array_multiple); */


$array_multiple = array(
    "America" => array( "Mexico","EU","Canada"),
    "Europa" => array(  "Alemania","Italia","Francia"),
    "Africa" => array(  "Nigeria","kenia")    
);
/* var_dump($array_multiple); */

foreach($array_multiple as $continente => $pais){
    echo "<strong>$continente:</strong><br>";
    
 foreach($pais as $content){
    echo "$content<br>";
 }
    

}



/* for ($i=0; $i <count($array_multiple); $i++){
    echo $i[$array_multiple];
}
 */

?>