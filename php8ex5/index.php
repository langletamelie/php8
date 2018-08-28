<?php
//stockages des nouvelles valeurs dans les cookies
if (!empty($_POST['login'])) {
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true);
}
if (!empty($_POST['password'])) {
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr"/>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>PHP 8EX5</title>
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