<?php
//stockages des infos dans les cookies
if (!empty($_POST['login'])) {
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true);
}
if (!empty($_POST['password'])) {
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>PHP 8EX3</title>
    </head>
    <body>
        <!-- formulaire demandant nom et prénom-->
        <form action="index.php" method="POST">
            <label>Votre identifiant <input type="text" name="login" /></label>
            <label>Votre mot de passe <input type="text" name="password" /></label>
            <input type="submit" name="submit" value="ENVOYER"/>
        </form>
    </body>
</html>
