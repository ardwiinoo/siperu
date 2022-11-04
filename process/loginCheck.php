<?php


$nimMhs = $_POST['nim'];
$passMhs = $_POST['password'];

session_start();

$_SESSION['name'] = "Arif Dwi Nugroho";
$_SESSION['nim'] = $nimMhs;
$_SESSION['pass'] = $passMhs;
$_SESSION['status'] = "Login Berhasil";

// echo $_SERVER['HTTP_REFERER'];

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
