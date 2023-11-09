<?php
    require_once 'config_session.inc.php';
    require_once 'login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <nav class="top-nav">
        <ul class="top-nav-list">
            <li><a href="#">Strona główna</a></li>
            <li><a href="">Kontakt</a></li>
            <li><a href="">Informacje</a></li>
            <li><a href="../index.php">Zaloguj się</a></li>
            <li><a href=""><?php output_username(); ?></a></li>
        </ul>
    </nav>
</body>
</html>