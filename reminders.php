<?php
	include('Core-Codes/db-con.php'); // Our database connectivity file
?>
<html>
	<head>
		<title>Add Reminders</title>
	</head>
	<body>
		<form name="setup_reminder" action="Codes/reminder_setup.php" method="POST">
			<table border='0' align='center'>
				<tr>
					<td>Event:</td>
					<td>
					<input name="reminder_name" type="text" maxlength="255" />
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
					<textarea name="reminder_desc" rows="5" /></textarea>
					</td>
				</tr>
				<tr>
					<td>Trigger Date</td>
					<td>

					<select name="reminder_date">
						<?php
						for($counter=1;$counter<=31;$counter++)
						{
						if($counter < 10)
						$prefix = "0";
						echo("\n<option>$prefix$counter</option>");
						}
						?>
					</select>

					<select name="reminder_month">
						<?php
						for($counter=1;$counter<=12;$counter++)
						{
						if($counter < 10)
						$prefix = "0";
						else
						$prefix = "";
						echo("\n<option>$prefix$counter</option>");
						}
						?>
					</select>

					<select name="reminder_year">
						<?php
						$current_year = date("Y");
						for($counter=$current_year;$counter<=$current_year+2;$counter++)
						{
						echo("\n<option>$counter</option>");
						}
						?>
					</select>


					</td>
				</tr>
				<tr>
					<td> </td>
					<td>
					<input name="submit" type="submit" value="add" />
					</td>
				</tr>
				</table>
			</form>
	</body>
</html>