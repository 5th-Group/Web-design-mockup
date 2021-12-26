<?php
include("../connection.php");
class order{
	function getAllOrder($cusID){
		$p=new connect();
		$sql="select * from orders where CustomerID = '$cusID'";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "Order ID: ".$row['OrderID']." - Customer ID: ".$row['CustomerID']." - Date: ".$row['Date']." - Total: ".$row['Total']." - Note: ".$row['Note']."</br>";
		}
	}
	function getOrderDetail($orderid){
		$p=new connect();
		$sql="select * from orderdetail where OrderID = '$orderid'";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "Order ID: ".$row['OrderID']." - Vegetable ID: ".$row['VegetableID']." - Quantity: ".$row['Quantity']." - Price: ".$row['Price']."</br>";
		}
	}
	function addOrder($order,$detail){
		$p=new connect();
		$sql="insert into orders (OrderID,CustomerID,Date,Total,Note) values ('$order[0]','$order[1]','$order[2]','$order[3]','$order[4]')";
		$sql2="insert into orderdetail (OrderID,VegetableID,Quantity,Price) values ('$detail[0]','$detail[1]','$detail[2]','$detail[3]')";
		$link=$p->connection();
		mysqli_query($link,$sql);
		mysqli_query($link,$sql2);
	}
}
?>