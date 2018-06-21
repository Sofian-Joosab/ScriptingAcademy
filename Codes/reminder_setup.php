<?php

session_start();

include '../Core-Codes/db-con.php';

$reminder_name = $_POST['reminder_name'];
$password = $_POST['password'];


mysqli_query( "INSERT INTO reminder_events(`reminder_name`, `reminder_desc`, `reminder_date`) VALUES('".addslashes($_POST['reminder_name'])."', '".addslashes($_POST['reminder_desc'])."', '".addslashes($reminder_date)."')" );