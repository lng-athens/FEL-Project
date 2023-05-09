<?php
if (isset($_POST['btn-login'])) {
    require 'dbh.inc.php';

    $usermail = trim($_POST['email']);
    $userpass = trim($_POST['password']);
    if (empty($usermail) || empty($userpass)) {
        header("Location: /login.php?error=emptyfields");
        exit();
    }
    else if (!filter_var($usermail, FILTER_VALIDATE_EMAIL) || !preg_match("/^[^\{\}\[\]\(\)\/\\\''\"~,;:.<>]*$/i", $userpass)) {
        header("Location: /login.php?error=invalidcredentials");
        exit();
    }
    else {
        $sql = "SELECT * FROM `users` WHERE `email`=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $usermail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($userpass, $row['password']);

                if ($pwdCheck === true) {
                    session_start();
                    $_SESSION["uid"] = $row['id'];
                    header("Location: ");
                    exit();
                }
                else {
                    header("Location: /login.php?error=invalidpassword");
                    exit();
                }
            }
            else {
                header("Location: /login.php?error=nouser");
                exit();
            }
        }
    }
}