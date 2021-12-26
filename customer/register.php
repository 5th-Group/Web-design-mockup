<?php
	include("saveRegister.php");
	$p=new register();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Market</title>
</head>
<body>
	<div class="frame">
		<form method="post" action="">
			<h1 class="frame-title">Register</h1>
			<p class="frame-text">Your's Fullname:</p>
			<input type="text" class="frame-input" name="fullname">
			<p class="frame-text">Password:</p>
			<input type="password" class="frame-input" name="pass">
			<p class="frame-text">Address:</p>
			<input type="text" class="frame-input" name="address">
			<p class="frame-text">City:</p>
			<input type="text" class="frame-input" name="city">
			<div class="submit">
				<button class="submit-decoration frame-text" name="submit" value="Register" type="submit">Register</button>
			</div>
			<?php
				switch($_POST['submit']){
					case 'Register':{
						$fn=$_REQUEST['fullname'];
						$pass=$_REQUEST['pass'];
						$adr=$_REQUEST['address'];
						$city=$_REQUEST['city'];
						if($fn!="" && $pass!="" && $adr!="" && $city!=""){
							$p->saveregister($fn,$pass,$adr,$city);
						}
						else{}
					}
				}
			?>
		</form>
	</div>
</body>
<style>
	body{
		margin: 0;
	}
	input{
		padding-left: 15px;
	}
	.frame{
		width: 350px;
		height: 500px;
		border: 1px solid #bfbfbf;
		margin: 5% 0px 0px 5%;
	}
	.frame-title{
		margin: 0px 0px 0px 3%;
		font-family: Arial;
		font-weight: bold;
	}
	.frame-text{
		margin: 5% 0px 1% 3%;
		font-family: Arial;
		font-size: 20px;
	}
	.frame-input{
		margin: 1% 0px 1% 3%;
		width: 88%;
		height: 40px;
		border-radius: 5px;
		border: 1px solid #bfbfbf;
	}
	.submit-decoration{
		border: none;
		background-color: #17a3b8;
		color: white;
		padding: 10px 15px 9px 15px;
		border-radius: 8px;
		margin-top: 6%;
	}
</style>
</html>