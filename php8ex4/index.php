<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 8EX4</title>
    </head>
    <body>
        <p>
            <?php
            //affichage des cookies créer dans l'exercice 3
            if (empty($_POST['login'])) {
                echo $_COOKIE['login'];
            } else {
                echo 'Votre identifiant n\est pas valide';
            }
            if (empty($_POST['login'])) {
                echo $_COOKIE['password'];
            } else {
                echo 'Votre mot de passe n\est pas valide';
            }
            ?>
        </p>
    </body>
</html>
