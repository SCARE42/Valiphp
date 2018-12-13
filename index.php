<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Valiphp</title>
</head>
<body>
  <header></header>
    <form method="POST" action="./home.php">
        <input type="text" name="firstname" placeholder="Your name">
        <input type="text" name="lastname" placeholder="Your lastname">
        <input type="password" name="password"  placeholder="Password">
        <?php
            echo '<input type="submit" value="connexion">'
        ?>
    </form>
<footer></footer>
</body>
</html>