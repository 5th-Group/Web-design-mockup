<?php
include("../connection.php");
class customer{
	function getByID($cusid){
		$p=new connect();
		$sql="select CustomerID, Fullname, Address, City from customers where CustomerID='.$cusid.' limit 1";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_fetch_array($ketqua);
		echo 'Customer ID: '.$row["CustomerID"].' - Fullname: '.$row["Fullname"].' - Address: '.$row["Address"].' - City: '.$row["City"];
	}
	function add($cus){
		$p=new connect();
		$sql="update customers set Password='$cus[1]', Fullname='$cus[2]', Address='$cus[3]', City='$cus[4]' where CustomerID='$cus[0]'";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
	}
	function add($cus){
		$p=new connect();
		$sql="insert into customers (Password,Fullname,Address,City) values ('$cus[0]','$cus[1]','$cus[2]','$cus[3]')";
		$link=$p->connection();
		mysqli_query($link,$sql);
	}
}
?>