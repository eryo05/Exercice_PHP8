<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Bienvenue sur la page numéro 2<br>';

    echo "<br> Votre nom : " . $_SESSION['lastname'] . " Votre prenom : " . $_SESSION['firstname'] . " Votre age : " . $_SESSION['age'];
    ?>
    
</body>
</html>
