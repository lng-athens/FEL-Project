<?php
if (isset($_POST['btn-signup'])) {
    require 'dbh.inc.php';

    // retrieves user input
    $userFirstName = $_POST['firstName'];
    $userLastName = $_POST['lastName'];
    $userMail = $_POST['email'];
    $userNumber = $_POST['mobileNumber'];
    $userPassword1 = $_POST['password1'];
    $userPassword2 = $_POST['password2'];
    $id = substr(md5(uniqid(rand(), true)), 0, 24);

    // Checks if any input fields is empty or blank
    if (empty($userFirstName) || empty($userLastName) || empty($userMail) || empty($userNumber) || empty($userPassword1) || empty($userPassword2)) {
        header("Location: /signup.php?error=emptyfields");
        exit();
    }
    else if (!filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
        header("Location: /signup.php?error=invalidemail");
        exit();
    }
    else if (!preg_match("/^[^\{\}\[\]\(\)\/\\\''\"~,;:.<>]*$/i", $userPassword1)) {
        header("Location: /signup.php?error=invalidpassword");
        exit();
    }
    else if($userPassword1 !== $userPassword2) {
        header("Location: /signup.php?error=passwordnotmatch");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z][a-zA-Z\s]*$/", $userFirstName) || !preg_match("/^[a-zA-Z][a-zA-Z\s]*$/", $userLastName)) {
        header("Location: /signup.php?error=invalidname");
        exit();
    }
    else {
        $sql = "SELECT `email` FROM `users` WHERE `email`=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $userMail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: /signup.php?error=emailtaken");
                exit();
            }
            else {
                $sql = "INSERT INTO `users`(`id`, `firstName`, `lastName`, `email`, `mobileNumber`, `password`) VALUES (?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: /signup.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPassword = password_hash($userPassword1, PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt, "ssssss", $id, $userFirstName, $userLastName, $userMail, $userNumber, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: /signup.php?status=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else {
    header("Location: /signup.php");
    exit();
}