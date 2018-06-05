<?php
//OPDRACHT: CONTROLESTRUCTUREN EN LOOPS - KAPPERSZAAK SANDERS
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
//Welke php-code moet ingevuld worden op de plek van ..... => ..... ?
// ANTWOORD: $afspraak => $tijd

$kappersagenda["uur"] = 16.00;

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach ($kappersagenda as $afspraak => $tijd){
    if ($afspraak == "uur") {
        print("<li>".$tijd."</li>");
    }
}
print("</lu>");

?>
</body>
</html>

<!--Welke php-code moet ingevuld worden op de plek van ..... => ..... ?
ANTWOORD: $afspraak => $tijd-->
