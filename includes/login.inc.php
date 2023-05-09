<?php
if (isset($_POST['btn-login'])) {
    require 'dbh.inc.php';

    $usermail = trim($_POST['email']);
    $userpass = trim($_POST['password']);

    // Checks if either input fields are empty
    if (empty($usermail) || empty($userpass)) {
        header("Location: /login.php?error=emptyfields");
        exit();
    }
    // Checks if either Email entered is valid or password entered does not contain the following characters: { } [ ] ( ) / \ ' " ` ~ , ; : . < >
    else if (!filter_var($usermail, FILTER_VALIDATE_EMAIL) || !preg_match("/^[^\{\}\[\]\(\)\/\\\''\"~,;:.<>]*$/i", $userpass)) {
        header("Location: /login.php?error=invalidcredentials");
        exit();
    }
    else {
        $sql = "SELECT * FROM `users` WHERE `email`=?"; // Retreives all users
        $stmt = mysqli_stmt_init($conn); // initialize SQL connection

        // Checks if any error in SQL connection
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $usermail); // Runs SQL connection with the $usermail
            mysqli_stmt_execute($stmt); // Executes the SQL connection
            $result = mysqli_stmt_get_result($stmt); // Retrieves the user with a email == $usermail

            if ($row = mysqli_fetch_assoc($result)) { // stores the users data to $row
                $pwdCheck = password_verify($userpass, $row['password']); // Checks if the $userpass input matches the password of the user in the database

                if ($pwdCheck === true) {
                    session_start(); // starts the session
                    $_SESSION["uid"] = $row['id']; // Stores the user's id in a session varialbe 'uid'
                    header("Location: /"); // redirects the user to the home page
                    exit();
                }
                else {
                    header("Location: /login.php?error=invalidpassword"); // redirects the user to login page with invalid password message
                    exit();
                }
            }
            else {
                header("Location: /login.php?error=nouser"); // redirects the user to the login page with no user message
                exit();
            }
        }
    }
}