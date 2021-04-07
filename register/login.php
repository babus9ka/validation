<?php
if (isset($_COOKIE['email']) && isset($_COOKIE['password'])){
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

}
?>
<form action="validator.php" method="post" enctype="multipart/form-data">
    <h3>E-mail</h3>
    <input type="text" name="email" value="<?=$email ?>">
    <h3>Password</h3>
    <input type="text" name="password" value="<?=$password ?>">
    <br>
    <input type="checkbox" name="remember"  value="1"> Remember me
    <br><br>
    <button type="submit">Log In</button>
</form>
<br>

<a href="register.php">Зарегестрироваться</a>
