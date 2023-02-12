<?php
setcookie('user', $user ['e-mail'], time() - 3600, "/");
header('Location: http://localhost:8888/index1.php');
?>