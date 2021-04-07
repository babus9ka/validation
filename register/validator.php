<?php


require_once __DIR__ . "/vendor/autoload.php";

use app\Connect;

if (!Connect::chek()){
    die("Error database");
}






$db = Connect::db();
$users = mysqli_query($db, "SELECT * FROM `users`");

if(isset($_POST['email'])){

    $tempEmail = $_POST['email'];
    $tempPassword = $_POST['password'];

    while( $user = mysqli_fetch_assoc($users)){

        if ($user['email'] == $tempEmail && $user['password'] == $tempPassword){
            $rem = $_POST['remember'];

            if (isset($rem)){
                setcookie('email', $tempEmail, time()+60*60*7);
                setcookie('password', $tempPassword, time()+60*60*7);

            }

            session_start();
            $_SESSION['email'] = $tempEmail;
            $_SESSION['password'] = $tempEmail;
            $userId = $user['id'];
            header("Location: general.php?user_id=" . $userId);

        } else {

            echo "Не правльный логин или пароль";
            ?>
            <br>
            <br>
            <a href="login.php">Попробовать ещё раз</a>
            <?php

        }
    }

} else {
    header("Location: login.php");
}