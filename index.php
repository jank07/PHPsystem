<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

<nav class="top-nav">
    <ul class="top-nav-list">
        <li><a href="includes/loggedin.php">Strona główna</a></li>
        <li><a href="">Kontakt</a></li>
        <li><a href="">Informacje</a></li>
        <li><a href="../index.php">Zaloguj się</a></li>
        <li><a href=""><?php output_username(); ?></a></li>
        <li><a href=""><form action="includes/logout.inc.php" method="post">
        <button>Logout</button>
    </form></a></li>
    </ul>

    <!-- <form action="includes/logout.inc.php" method="post">
        <button>Logout</button>
    </form> -->
</nav>

    <?php
    if(!isset($_SESSION["user_id"])) { ?>
        <h3>Login</h3>

        <form id="login-form" action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button>Login</button>
        </form>
    <?php } ?>

    <?php
    check_login_errors();
    ?>

<?php if(!isset($_SESSION["user_id"])) { ?>
    <h3>Signup</h3>

    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_inputs();
        ?>
        <button>Sign up</button>
    </form>
    <?php } ?>

    <?php
    check_signup_errors();
    ?>

</body>
</html>