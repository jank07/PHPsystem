<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // ERROR HANDLERS
        if (is_input_empty($username, $pwd, $email)) {

        }
        if (is_email_invalid($email)) {

        }

        if(is_username_taken($username)) {
            
        }

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    // going back to the main page if error
    header("Location: ../index.php");
    die();
}