<?php
session_start();
include("add.php");
$p=new adding();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.css">
<title>Market</title>
</head>
<body>
	<div class="frame">
		<div class="frame-add">
			<form method="post" action="">
				<p class="frame-text">Name:</p>
				<input type="text" class="frame-input" name="name">
				<p class="frame-text">Description:</p>
				<input type="text" class="frame-input" name="description">
				<button class="submit-decoration frame-text" name="submit" value="Add" type="submit">Add</button>
			</form>
			<?php
				switch($_POST['submit']){
					case 'Add':{
						$name=$_REQUEST['name'];
						$description=$_REQUEST['description'];
						if($name!="" && $description!=""){
							$p->add($name,$description);
						}
						else{
							break;
						}
						break;
					}
				}
			?>
		</div>
		<div class="frame-category">
			<div style="width: 100%"><p class="frame-title">Category</p></div>
			<table class="table">
			  	<thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Name</th>
					  <th scope="col">Description</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$p->showall();
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
<style>
	body{
		margin: 0;
	}
	.frame{
		width: 70%;
		height: 600px;
		border: 1px solid #bfbfbf;
		margin: 5% 10% 0px 10%;
		display: flex;
	}
	.frame-add{
		height: 600px;
		width: 30%;
	}
	.frame-category{
		height: 600px;
		width: 70%;
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
	.frame-title{
		margin: 10px 0px 10px 5%;
		font-family: Arial;
		font-size: 30px;
		font-weight: bold;
	}
</style>
</html>