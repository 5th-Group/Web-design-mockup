<?php
include("../connection.php");
class category{
	public function getAll(){
		$p=new connect();
		$sql="select * from category";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "Category ID: ".$row['CategoryID']." - Name: ".$row['Name']." - Description: ".$row['Description']."</br>";
		}
	}
	public function add($cate){
		$p=new connect();
		$sql="insert into category (Name,Description) values ('$cate[0]','$cate[1]')";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
	}
}
?>