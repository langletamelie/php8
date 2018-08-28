<?php
//ouverture de la session (permet de faire passer les données d'une page à une autre)
session_start();
//$_SESSION est une superglobale et un tableau associatif
$_SESSION['lastname'] = 'Lechat';
$_SESSION['firstname'] = 'Lucien';
$_SESSION['age'] = '12';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <title>PHP 8EX2</title>
    </head>
    <body>
        <a class="btn btn-danger" href="page2.php" role="button">page 2</a>
    </body>
</html>
