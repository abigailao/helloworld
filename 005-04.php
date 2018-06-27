<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>PHP Opdrachten</title>
    <style>
    </style>
</head>
<!--header and stuff-->
<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <p class="navbar-brand">Login Pagina</p>
            </div>
        </div>
    </nav>
</header>
<body>
<?php

//    <!--vv! USED ON SEPARATE PHP PAGE !vv-->
if(isset($_GET['pagina']) == 2) {
//if email is piet@worldonline.nl and wachtwoord is doetje123 echo welkom!
    if ($_POST['email'] == "piet@worldonline.nl" && ($_POST['wachtwoord'] == "doetje123")) {
        echo "Welkom!";
    } else if ($_POST['email'] == "klaas@carpets.nl" && ($_POST['wachtwoord'] == "snoepje777")) {
        echo "Welkom!";
    } else if ($_POST['email'] == "truushendriks@wegweg.nl" && ($_POST['wachtwoord'] == "123")) {
        echo "Welkom!";
    } //if non of that shit above: gtfo
    else {
        echo "Sorry, geen toegang!";
        echo "<a href='005-04.php'> Terug</a>";
    };
}else {
    ?>

<!--form action 005-04,php + ?pagina=2 merges code together on one page-->
    <form action="005-04.php?pagina=2" method="post"> <!--action is used to connect to another page-->
        Email <input type="email" name="email"><br>
        Wachtwoord <input type="password" name="wachtwoord">
        <input type="submit" name="knop">
    </form>

    <?php
};?>
<!--all the stuff down here cause bootstrap.-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>