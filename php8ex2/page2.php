<?php
//démarage de la session de la page2. On doit démarré la session à chaque page
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>PHP 8EX2</title>
    </head>
    <body>
        <?php if (!empty($_SESSION['lastname'])) { ?>
            <p><?= $_SESSION['lastname']; ?></p>
        <?php } ?>
        <?php if (!empty($_SESSION['firstname'])) { ?>
            <p><?= $_SESSION['firstname']; ?></p>
        <?php } ?>
        <?php if (!empty($_SESSION['age'])) { ?>
            <p><?= $_SESSION['age']; ?></p>
        <?php } ?>
    </body>
</html>
