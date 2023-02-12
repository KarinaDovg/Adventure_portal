<?php

$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);



$password = md5($password."dfghjbnmk12345678");

$mysql = new mysqLi('localhost', 'root', 'root', 'register_login');

$result = $mysql->query("SELECT * FROM `users` WHERE `e-mail`= '$email' AND `password`='$password' ");

$user = $result->fetch_assoc();
if(count($user)==0){
  echo "Don't exist";
  exit();
}

setcookie('user', $user ['e-mail'], time() + 3600, "/");

$mysql->close();
header('Location: http://localhost:8888/index1.php');
?>