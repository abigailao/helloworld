<?php
//OPDRACHT: CONTROLESTRUCTUREN EN LOOPS - ARRAYS CONTROLESTRUCTUREN LOOPS
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
// for($i = 1; $i<=9 ;$i++) {
//     echo "<img src='img/binturongs/Binturong".$i.".jpg'>";
// }
$wisterias = array("wisteria1.jpg", "wisteria2.jpg", "wisteria3.jpg");

foreach($wisterias as $wisteria) {
    echo "<img src='img/wisterias/".$wisteria."'>";
}

?>
</body>
</html>
