<?php
ob_start();
class register{
	public function saveregister($fn, $pass, $adr, $city){
		include("../connection.php");
		$p=new connect();
		$sql="insert into customers(Password,Fullname,Address,City) values ('$pass','$fn','$adr','$city')";
		$link=$p->connection();
		mysqli_query($link,$sql);
	}
}
?>