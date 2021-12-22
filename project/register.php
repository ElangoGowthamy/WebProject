<?php
	include"database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Register Form </title>
		<link rel="stylesheet" type="text/css" href="css/regstyle.css">
	</head>
	<body>
				
			<div id="section">
					<div class="content1">
					
						<h3 > Register Form </h3><br>
						<?php
							if(isset($_POST["submit"]))
							{
								$sq="insert into user(uname,uaddress,umail,upno,utime) values ('{$_POST["uname"]}','{$_POST["uaddress"]}','{$_POST["umail"]}','{$_POST["upno"]}','{$_POST["utime"]}')";
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success..</div>";
								}
								else
									{
										echo "<div class='error'>Insert Failed..</div>";
									}
							}	
						?>
						
						<form method="post" action="user.php">
						   <label> Full Name </label><br>
						   <input type="text" name="uname" class="input">

						   <br>

                           <label> Address </label><br>
						   <input type="text" name="uaddress" class="input">

						   <br>

                           <label> Email </label><br>
						   <input type="text" name="umail" class="input">

						   <br>

                           <label> Contact No </label><br>
						   <input type="text" name="upno" class="input">

						   <br>

                           <label> Schedule Time </label><br>
						   <input type="text" name="utime" class="input">

						   <br>

						   <button type="submit" class="btn" name="submit"> Register </button>
						</form>
				
					</div>
						
			</div>
	
	</body>
</html>