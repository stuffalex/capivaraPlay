<?php
session_start();

if(!$_SESSION['email']) {
	header('Location: ./../view/home.php');
	exit();
}