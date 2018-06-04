<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <style>
        img {
            width: 25px;
            margin: 0.5%;
        }
    </style>
</head>
<body>
<?php

$zc["De spartelkuikens "] = 25;
$zc["De waterbuffels "] = 32;
$zc["plonsmderin "] = 11;
$zc["bommetje "] = 23;

foreach ($zc as $label => $aantal){
    echo '<br>'. $label.$aantal;
    //the break before the ego sets the images next to the text & Breaks a new line for the next sentences.

    for($i=0; $i<$aantal/5;$i++){
        echo "<img src='img/overig/zwemclubs.jpg'>";
    }
}

//$a = array(1,5,66,"truus");
//echo $a[0]."<br>";
//echo $a[2];

?>
</body>
</html>