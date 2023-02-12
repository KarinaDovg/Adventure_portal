<?php


$email_create = filter_var(trim($_POST['email_create']),
FILTER_SANITIZE_STRING);
$password_create = filter_var(trim($_POST['password_create']),
FILTER_SANITIZE_STRING);


if (mb_strlen($email_create) < 5 || mb_strlen($email_create) > 90) {
  echo "Invalid email length";
  exit();
} else if (mb_strlen($password_create) < 2 || mb_strlen($password_create) > 50) {
  echo "Invalid password length";
  exit();
}

$password_create = md5($password_create."dfghjbnmk12345678");
$mysql = new mysqLi('localhost', 'root', 'root','register_login');
$mysql->query("INSERT INTO `users` (`e-mail`, `password`)
VALUES('$email_create', '$password_create')");


$mysql->close();
header('Location: http://localhost:8888/index1.php');
?>