<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 8EX1</title>
    </head>
    <body>
        <p>
            <?php
            echo $_SERVER['HTTP_USER_AGENT']; //affichage de l'user agent
            //$_SERVER est un tableau (visible grace aux crochets) intérieur des crochets: clé associative car c'est un tableau associatif
            ?>
        </p>
        <p>
            <?php
            echo $_SERVER['REMOTE_ADDR']; //affichage de l'adresse ip
            ?>
        </p>
        <p>
            <?php
            echo $_SERVER['SERVER_NAME']; //affichage du nom du serveur
            ?>
        </p>
        <p><?= $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p><?= $_SERVER['REMOTE_ADDR']; ?></p>
        <p><?= $_SERVER['SERVER_NAME']; ?></p>
    </body>
</html>
