<?php 
    session_start();

    if (isset($_COOKIE["test"]) AND isset($_COOKIE["test2"])) {

        setcookie("test","valeur_modifie", time() + 3600, $Path='/');
        setcookie("test2","valeur_modifie2", time() + 3600);
    }
    
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

    <p>Nouvelle valeur cookie</p>
    <p><br> cookie1 : <?php echo $_COOKIE["test"];?></p>
    <p><br> cookie2 : <?php echo $_COOKIE["test2"]; ?></p>
    
</body>
</html>