<?php
ob_start();
session_start();
class login{
	public function checklogin($user, $pass){
		include("../connection.php");
		$p=new connect();
		$sql="select * from customers where CustomerID='$user' and Password='$pass' limit 1";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i==1){
			$_SESSION['login']=true;
			while($row=mysqli_fetch_array($ketqua)){
				$fn=$row['Fullname'];
				$_SESSION['Fullname']=$fn;
				header('location:../vegetable/index.php');
			}
		}
		else{
			$wlogin="Tài khoản không trùng khớp!";
			$_SESSION['wlogin']=$wlogin;
		}
	}
}
?>