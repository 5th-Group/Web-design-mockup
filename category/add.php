<?php
include("../connection.php");
class adding{
	function showall(){
		$p=new connect();
		$sql="select * from category";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
		$row=mysqli_num_rows($ketqua);
		while($row=mysqli_fetch_array($ketqua)){
			echo "
				<tr>
					<th scope='row'>".$row['CategoryID']."</th>
				  	<td>".$row['Name']."</td>
				  	<td>".$row['Description']."</td>
				</tr>
			";
		}
	}
	public function add($name,$description){
		$p=new connect();
		$sql="insert into category (Name,Description) values ('$name','$description')";
		$link=$p->connection();
		$ketqua=mysqli_query($link,$sql);
	}
}
?>