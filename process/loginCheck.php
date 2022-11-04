<?php


$nimMhs = $_POST['nim'];
$passMhs = $_POST['password'];

session_start();

$_SESSION['name'] = "Arif Dwi Nugroho";
$_SESSION['nim'] = $nimMhs;
$_SESSION['pass'] = $passMhs;

// echo $_SERVER['HTTP_REFERER'];

header('Location: ' . $_SERVER['HTTP_REFERER'] . '?mess=Login Berhasil');
exit;