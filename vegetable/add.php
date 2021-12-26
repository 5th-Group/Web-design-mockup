<?php
include("../connection.php");
class adding{
	function loadcategory(){
		$p=new connect();
		$sql="select Name from category";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "<option class='frame-text'>".$row['Name']."</option>";
		}
	}
	function getCID($categoryname){
		$p=new connect();
		$sql="select CategoryID from category where Name='$categoryname' limit 1";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_fetch_array($ketqua);
		return $row['CategoryID'];
	}
	function add($vegetablename,$unit,$amount,$image,$categoryname,$price){
		$p=new connect();
		$categoryid=$this->getCID($categoryname);
		$sql="insert into vegetable (CategoryID,VegetableName,Unit,Amount,Image,Price) values ('$categoryid','$vegetablename','$unit','$amount','$image','$price')";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
	}
}
?>