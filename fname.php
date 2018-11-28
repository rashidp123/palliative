<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$query=mysql_query("insert into add (fullname) values ('$fname')");
	if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Patient</title>
		</head>
		<body>
			<form name="reg" id="regist"  method="post">
				<input type="text"  name="fname" placeholder="Full Name" required>
				<button type="submit" id="submit" name="submit">
									Submit 
								</button>
							</form>

		</body>
		</html>