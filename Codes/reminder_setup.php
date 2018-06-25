<?php

session_start();

include '../Core-Codes/db-con.php';

$reminder_name = $_POST['reminder_name'];
$reminder_desc = $_POST['reminder_desc'];
$reminder_date = $_POST['reminder_date'];
$reminder_month = $_POST['reminder_month'];
$reminder_year = $_POST['reminder_year'];

$date = "{$reminder_year}-{$reminder_month}-{$reminder_date}";
		$inputdate = date("Y-M-D",strtotime($date));



$sql = "INSERT INTO reminder (reminder_name, reminder_desc, reminder_date) 
		VALUES ('$reminder_name', '$reminder_desc', '$date')";
		$result = $conn->query($sql);
		header("Location:../list_reminders.php");


