<?php


namespace app;


class User extends Connect
{
    public static function add($name, $email, $password){



        $chek = self::chek();
        if (!$chek){
            return false;
        }


        if ($name == NULL || $email == NULL || $password == NULL){
            return false;
        }

        $SQL = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')";

        $connect = self::db();

        $user = mysqli_query($connect, $SQL);

        return $user ? true : false;

    }
}