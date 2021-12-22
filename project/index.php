<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Evento </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
    <header class="header">

        <a href="#" class="logo"><span>e</span>vento</a>

    </header>

		
		<div class="login">
			<h1 class="heading"> Admin Login </h1>
			<div class="log" style="height: auto;
                                    width: 50%;
                                    margin: 0 auto;
                                    margin-top: 20px;
                                    padding: 30px;
                                    margin-bottom: 40px;
                                    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                    -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			<?php
				if(isset($_POST["login"]))
				{
					$sql="select * from admin where aname='{$_POST["aname"]}' and apass='{$_POST["apass"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION["aid"]=$ro["aid"];
						$_SESSION["aname"]=$ro["aname"];
						echo "<script>window.open('admin_home.html','_self');</script>";
					}
					else
					{
						echo "<div class='error'>Invalid Username or Password</div>";
					}
					
				}
				if(isset($_GET["mes"]))
				{
					echo "<div class='error' style='background: #ff1515;
                                                    color: white;
                                                    line-height: 30px;
                                                    border-radius: 5px;
                                                    height: 30px;
                                                    text-align: center;
                                                    margin-bottom: 10px;'>{$_GET["mes"]}</div>";
				}
				
			?>
		
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>User Name</label><br>
					<input type="text" name="aname" required class="input" style="height: 30px;
                                                                                width: 90%;
                                                                                padding: 2px;
                                                                                margin-top: 10px;">
                    <br><br>
					<label>Password </label><br>
					<input type="password" name="apass" required class="input" style="height: 30px;
                                                                                        width: 90%;
                                                                                        padding: 2px;
                                                                                        margin-top: 10px;">
                    <br>
					<button type="submit" class="btn" name="login">Login Here</button>
				</form>
			</div>
		</div>
        
		<script src="jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>