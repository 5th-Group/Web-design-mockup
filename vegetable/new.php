<?php
include("add.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Market</title>
</head>
<body>
	<div class="frame">
		<div style="width: 100%"><p class="frame-title">Category</p></div>
		<form method="post" action="add.php">
			<div style="display: flex">
				<div class="vegetable-name">
					<p class="frame-text">Vegetable Name:</p>
					<input type="text" class="frame-input frame-text" name="vegetablename">
					<div style="display: flex">
						<div style="width: 43%; margin-left: 15px">
							<p class="frame-text">Unit</p>
							<select class="frame-input frame-text" name="unit">
								<option class="frame-text">Kg</option>
								<option class="frame-text">g</option>
								<option class="frame-text">Mg</option>
							</select>
						</div>
						<div style="width: 49%; margin-left: 15px">
							<p class="frame-text">Amount</p>
							<input type="text" class="frame-input frame-text" name="amount">
						</div>
					</div>
					<p class="frame-text">Image:</p>
					<input type="file" class="frame-input frame-text" accept="image/png,image/jpg,image/jpeg" id="image" name="image">
				</div>
				<div class="category-name">
					<p class="frame-text">Category Name:</p>
					<select class="frame-input frame-text" name="categoryname">
						<?php
						$p=new adding();
						$p->loadcategory();
						?>
					</select>
					<p class="frame-text">Price</p>
					<input type="text" class="frame-input frame-text" name="price">
				</div>
			</div>
			<button class="submit-decoration frame-text" name="submit" value="Add" type="submit">Add</button>
		</form>
		<?php
			switch($_POST['submit']){
				case 'Add':{
					$vegetablename=$_REQUEST['vegetablename'];
					$unit=$_REQUEST['unit'];
					$amount=$_REQUEST['amount'];
					$image=$_REQUEST['image'];
					$categoryname=$_REQUEST['categoryname'];
					$price=$_REQUEST['price'];
					if($vegetablename!="" && $unit!="" && $amount!="" && $image!="" && $categoryname!="" && $price!=""){
						$p->add($vegetablename,$unit,$amount,$image,$categoryname,$price);
					}
					else{
						break;
					}
					break;
				}
			}
		?>
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
	}
	.frame-title{
		margin: 10px 0px 10px 5%;
		font-family: Arial;
		font-size: 30px;
		font-weight: bold;
	}
	.frame-text{
		margin: 10px 0px 10px 3%;
		font-family: Arial;
		font-size: 20px;
	}
	.vegetable-name{
		width: 70%;
	}
	.category-name{
		width: 30%;
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
		margin: 2%;
	}
</style>
</html>