<?php
//OPDRACHT: CONTROLESTRUCTUREN EN LOOPS - CONDITIES EN MODULUS
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <style>
        body {
            text-align: center;
        }

        .rood {
            border:red solid 5px;
        }
        .groen {
            border:green solid 5px;
        }
    </style>
</head>
<body>
<?php
for($i = 1; $i<=9; $i++) {
    if($i % 2 == 0) {
        $class = "class='rood'";
    } else {
        $class = "class='groen'"; //If i not equal to 2, class because green variable
    } // the color red does not appear if not equal to 2.
    echo "<img ".$class. "src='img/binturongs/Binturong".$i.".jpg'>";
}
?>
</body>
</html>