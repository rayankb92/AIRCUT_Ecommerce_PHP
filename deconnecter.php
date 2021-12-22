<?php session_start(); ?>
<?php
unset($_SESSION['LOGGED_USER']);
unset($_COOKIE['LOGGED_USER']);
unset($loggedUser);
header('Location: login.php');
exit();
