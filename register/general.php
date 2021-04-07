<?php

require_once __DIR__ . "/vendor/autoload.php";
use app\Connect;

if (!Connect::chek()){
    die("Error database");
}

$user_id = $_GET['user_id'];
$db = Connect::db();
$user = mysqli_query($db, "SELECT * FROM `users` WHERE `id` = '$user_id'");

if (mysqli_num_rows($user) === 0) {
    die("User not found");
}
$user = mysqli_fetch_assoc($user);




echo "Welcome, " . $user['name'];
echo " <br> <br> <a href='logout.php'>logout</a> ";
