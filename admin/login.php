<?php 
if(!isset($_POST['login']))
{
	header('Location: /');
}
session_start();
include '../database.php';
$db = new database();
$query = "SELECT * FROM `login` WHERE `login`.login = '" . $_POST['login'] . "' and pass = '" . $_POST['password'] . "' LIMIT 1";
$result = $db->query($query);
if($result != false)
{
	$row = $result->fetch_assoc();
	$_SESSION['login'] = $row['login'];
	header("Location: /admin");
}else
{

	header("Location: /admin");
}