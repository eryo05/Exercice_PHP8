<?php
    session_start(); 
        $_SESSION['lastname'] = 'Gauthier';
        $_SESSION['firstname'] = 'Jeremy';
        $_SESSION['age'] = 10;

    if (isset($_POST["login"]) AND isset($_POST["pass"])) {
        setcookie("test", $_POST["login"],  time()+3600);
        setcookie("test2", $_POST["pass"],  time()+3600);
    }
  ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Bienvenue à la page numéro 1<br></p>
    <p><a href="page2.php">Aller a la page 2</a><br></p>

    <?php
        $useragent = $_SERVER ['HTTP_USER_AGENT'];
        $adresse_ip = $_SERVER['REMOTE_ADDR'];
        $serveur_name = $_SERVER['SERVER_NAME'];
    ?>

    <p><br>Your User Agent is : <?php echo $useragent; ?></p>
    <p><br>IP : <?php echo $adresse_ip; ?></p>
    <p><br>Serveur : <?php echo $serveur_name; ?></p>

    <form method="post" action="index.php">
            <p>
            <label> Entrez login :
            <input type="text" name="login"/>
            </p>
            </label>
            <p>
            <label> Entrez prenom :
            <input type="password" name="pass"/>
            </label>
            </p>
            <input type="submit" value="Valider" />
    </form>
    <p><br><a href="page3.php">Aller a la page 3 pour voir les donnees des cookies</a><br></p>
    <p><br><a href="page4.php">Aller a la page 4 pour modifier et afficher cookies</a><br></p>
</body>
</html>
