<?php
session_start();
?>
<!doctype html>
<html style="magin:0">
<head>
<meta charset="utf-8">
<title>Market</title>
</head>
<body>
	<div class="div-menu">
		<a class="menu-box" style="color: white;font-size: 18px">Market online</a>
		<a class="menu-box">Vegetable</a>
		<a class="menu-box">Cart</a>
		<?php
			if(isset($_SESSION['login']) && $_SESSION['login']==true){
				echo '<a class="menu-box">History</a>
					  <a class="menu-box" href="customer/logout.php">Logout</a>
					  <a class="menu-box" style="background-color: #17a3b8; color: #282A35; border-radius: 5px">'.$_SESSION['Fullname'].'</a>';
			}
			else{
				echo '<a class="menu-box" href="customer/login.php">Log in</a>';
			}
		?>
		
	</div>
</body>
<style>
	body{
		margin: 0;
	}
	.div-menu{
		width:100%;
		height: 50px;
		float: left;
		display:flex;
		background-color: #282A35;
		position: relative;
	}
	.menu-box{
		text-decoration-line: none;
		display: block;
		color: grey;
		background-image: none;
		padding: 8px 15px 3px 15px;
		margin: 7px 0px 7px 0px;
		font-size: 15px;
		font-weight: bold;
		font-family: Arial;
		text-align: center;
	}
</style>
</html>
