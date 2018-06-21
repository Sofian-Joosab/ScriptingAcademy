<?php
session_start();

include '../Core-Codes/db-con.php';

$username = $_POST['username'];
$password = $_POST['password'];




	$sql = "SELECT * FROM user WHERE username = '$username' AND password ='$password'";
	$result = $conn->query($sql);
	header("Location: ../reminders.php");

	// For later use, when we need to check for users credentials and redirect.
	// if(!$row = $result->fetch_assoc()){
	 
	//  header("Location:../login.php?error=empty");
	//  exit();


	







