<?php
require_once __DIR__ . "/vendor/autoload.php";

use app\Connect;
use app\User;

?>


<form action="register.php" method="post" enctype="multipart/form-data">
    <h3>Name</h3>
    <input type="text" name="name">
    <h3>E-mail</h3>
    <input type="text" name="email">
    <h3>Password</h3>
    <input type="text" name="password">
    <br>
    <br>
    <button type="submit">Log In</button>
</form>
<?php
if (isset($_POST['name'])){
    $user = User::add($_POST['name'], $_POST['email'], $_POST['password']);

    if ($user){
        header("Location: login.php");

    } else {
        echo "<p style='margin-top: 20px; color: wheat; background: red'>Ошибка при регистрации</p>";
    }
}