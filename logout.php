<?php
session_start();
require_once 'classes/UserAuthentication.php';
use Classes\Authentication\User;

$user = new User("database.txt");
$user->logout();

header("Location: login.php");
exit;
