<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Signup</h3>

    <form action="includes/signup.inc.php" method="post">
        
        <button>Sign up</button>
    </form>

    <?php
    check_signup_errors();
    ?>

</body>
</html>