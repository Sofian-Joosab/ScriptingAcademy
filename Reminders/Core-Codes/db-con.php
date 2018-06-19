<?php 

	$conn = mysqli_connect("localhost", "root", "", "Reminders");

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
		exit();
	}