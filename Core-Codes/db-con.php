<?php 

	$conn = mysqli_connect("localhost", "root", "", "reminders");

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
		exit();
	}