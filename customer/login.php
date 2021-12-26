<?php
	session_start();
	include("checkLogin.php");
	$p=new login();
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
			<h1 class="frame-title">Login</h1>
			<p class="frame-text">Your's ID:</p>
			<input type="text" class="frame-input" name="user">
			<p class="frame-text">Password:</p>
			<input type="password" class="frame-input" name="pass">
			<div class="submit">
				<button class="submit-decoration frame-text" name="submit" value="Login" type="submit">Login</button>
				<button class="submit-decoration frame-text" name="submit" value="Register" type="submit">Register</button>
			</div>
			<?php
				switch($_POST['submit']){
					case 'Login':{
						$user=$_REQUEST['user'];
						$pass=$_REQUEST['pass'];
						if($user!='' && $pass!=''){
							$p->checklogin($user,$pass);
						}
						else if($user=="" && $pass==""){
							$wlogin="Vui lòng điền tài khoản mật khẩu !";
							$_SESSION['wlogin']=$wlogin;
						}
						else if($user==""){
							$wlogin="Vui lòng điền tài khoản !";
							$_SESSION['wlogin']=$wlogin;
						}
						else if($pass==""){
							$wlogin="Vui lòng điền mật khẩu !";
							$_SESSION['wlogin']=$wlogin;
						}
						else{
							$wlogin="Lỗi không xác định !";
							$_SESSION['wlogin']=$wlogin;
						}
						break;
					}
					case 'Register':{
						header('location:register.php');
					}
				}
		  		if(isset($_SESSION['wlogin']))
					echo "<p class='frame-text' style='color:red'>* ".$_SESSION['wlogin']."</p>";
				else{}
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
		height: 350px;
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
		margin-top: 3%;
	}
</style>
</html>