<?php
session_start();
include("../connection.php");
class vegetable{
	public function getAll(){
		$p=new connect();
		$sql="select * from vegetable";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "Vegetable ID: ".$row['VegetableID']." - Vegetable Name: ".$row['VegetableName']." - Unit: ".$row['Unit']." - Amount: ".$row['Amount']." - Price: ".$row['Price']."</br>";
		}
	}
	public function getListByCateID($cateid){
		$p=new connect();
		$sql="select * from vegetable where CategoryID='$cateid'";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "Vegetable ID: ".$row['VegetableID']." - Vegetable Name: ".$row['VegetableName']." - Unit: ".$row['Unit']." - Amount: ".$row['Amount']." - Price: ".$row['Price']."</br>";
		}
	}
	public function getListByCateIDs($cateids){
		$p=new connect();
		$cateids=implode(',',$cateids);
		$sql="select * from vegetable where CategoryID In ($cateids)";
		$ketqua=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "Vegetable ID: ".$row['VegetableID']." - Vegetable Name: ".$row['VegetableName']." - Unit: ".$row['Unit']." - Amount: ".$row['Amount']." - Price: ".$row['Price']."</br>";
		}
	}
	public function getByID($vegetableID){
		$p=new connect();
		$sql="select * from vegetable where VegetableID='$vegetableID' limit 1";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "Vegetable ID: ".$row['VegetableID']." - Vegetable Name: ".$row['VegetableName']." - Unit: ".$row['Unit']." - Amount: ".$row['Amount']." - Price: ".$row['Price']."</br>";
		}
	}
	public function getAll2(){
		$p=new connect();
		$sql="select * from vegetable";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo '
				<div class="container">
					<img class="container-images" src="../images/'.$row['Image'].'">
					<div style="display: flex">
						<p class="frame-text" style="margin: 0px 0px 0px 20px">'.$row['VegetableName'].'</p>
						<div class="frame-text price-tag">'.$row['Price'].'</div>
					</div>
					<button class="buy" name="buy" value='.$row['VegetableID'].'>Buy</button>
				</div>
			';
		}
	}
	public function getByValue($value){
		$p=new connect();
		$sql="select * from vegetable where CategoryID=".$value;
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo '
				<div class="container">
					<img class="container-images" src="../images/'.$row['Image'].'">
					<div style="display: flex">
						<p class="frame-text" style="margin: 0px 0px 0px 20px">'.$row['VegetableName'].'</p>
						<div class="frame-text price-tag">'.$row['Price'].'</div>
					</div>
					<button class="buy" name="buy" value='.$row['VegetableID'].'>Buy</button>
				</div>
			';
		}
	}
}
?>