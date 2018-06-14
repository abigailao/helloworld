<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <style>
    </style>
</head>
<body>
<?php

//Schrijf een functie die een string accepteert als argument en als
//return-waarde een string geeft met de letters in omgekeerde volgorde.

a(strrev("y tho")); //output: oht y
echo $c;

function a($b) {
global $c;
$c = $b;
}

//-----------------------------------------------------

////Schrijf een functie die bepaalt of een getal deelbaar is door 3. De functie accepteert een getal als argument en als
//// retour-waarde wordt een boolean teruggegeven.

//number (32);
//
//function number($number){
//    $number = $number /3;
//    if($number % 3 == 0)  {
//        echo $number;
//    } elseif ($number % 3 != 0) {
//        echo "nah.";
//    }
//
//}

//---------------------------------------------------------------------

////Opdracht: Functies
////Schrijf een functie die als argument een waarde in Celsius accepteert en de temperatuur in Fahrenheit weergeeft.

//$c = 5*1.8; //change (5) the celsius
//telOp($c,32); //original formula: ℉=(℃*1.8)+32
//echo "Fahrenheit = ".$c."℉";
//
//function telOp($a, $b) {
//    global $c;
//    $c = $a + $b;
//}
?>
</body>
</html>

<!--echo strrev("Hello world!");-->