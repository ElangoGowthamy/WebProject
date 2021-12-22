<?php
	include"database.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EventO </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/userstyle.css">

</head>
<body>

<header class="header">

    <a href="#" class="logo"><span>e</span>vento</a>

    <nav class="navbar">
        <a href="admin_home.html">home</a>
        <a href="admin_service.html">service</a>
        <a href="admin_about.html">about</a>
        <a href="admin_gallery.html">gallery</a>
        <a href="admin_price.html">price</a>
        <a href="user.php"> User Details </a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>
                <div class="tbox" >
					<h3 style="margin-top:30px;"> User Details </h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
                            <th> Id </th>
							<th>User Name</th>
							<th> Address </th>
							<th> Email </th>
                            <th> Contact No </th>
                            <th> Schedule time </th>
						</tr>
						<?php
							$s="select * from user";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
										<td>{$i}</td>
										<td>{$r["uname"]}</td>
										<td>{$r["uaddress"]}</td>
                                        <td>{$r["umail"]}</td>
                                        <td>{$r["upno"]}</td>
                                        <td>{$r["utime"]}</td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
				</div>
                        </body>
                        </html>