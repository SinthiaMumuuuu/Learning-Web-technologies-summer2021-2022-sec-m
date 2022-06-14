<?php
session_start();
include("Validation.php");
?>
<html>
<head>
	<title>FORM</title>
</head>
<body>
		<form>
			<fieldset>
				<legend>NAME</legend>
				<table>
					<tr>
						<td></td>
						<td><input type="text" name="name" value="" ></td><?php echo $NameError;?>

					</tr>
					<tr>
					<td><hr></hr></td>
					<td><hr></hr></td>
					</tr>
					
						<td>
							<input type="submit" name="" value="Submit">
						</td>
						
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
