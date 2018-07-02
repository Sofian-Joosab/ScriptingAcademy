<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of Reminders</title>
	<?php 

		include 'Core-Codes/db-con.php';
		$sql = "SELECT * FROM reminder";
		$records = $conn->query($sql);

	 ?>
</head>
<body>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Date</th>
		</tr>

		<?php 

			while ($data = mysqli_fetch_assoc($records)) {
				echo "<tr>";
				echo "<td>" .$data['reminder_name']."</td>";
				echo "<td>" .$data['reminder_desc']."</td>";
				echo "<td>" .$data['reminder_date']."</td>";
				echo"</tr>";
			}

		 ?>
	</table>
</body>
</html>