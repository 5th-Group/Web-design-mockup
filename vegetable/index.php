<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Market</title>
</head>
<body>
	<div class="frame">
		<div class="frame-category">
			<form method="post" action="">
				<p class="frame-text margin-text">Category Name:</p>
				<div style="display: flex">
					<label class="frame-text"><input class="margin-cb" type="checkbox" name="checkbox[]" value="1">Fruit</label>
				</div>
				<div style="display: flex">
					<label class="frame-text"><input class="margin-cb" type="checkbox" name="checkbox[]" value="2">Green Vegetables</label>
				</div>
				<div style="display: flex">
					<label class="frame-text"><input class="margin-cb" type="checkbox" name="checkbox[]" value="3">Spices</label>
				</div>
				<button class="buy" style="background-color: #17a2b8">Filter</button>
			</form>
			</div>
		
		<div class="frame-product">
			<div style="width: 100%"><p class="frame-title">Vegetable</p></div>
			<form method="post" action="">
			<div class="frame-sub-product">
				<?php
					include("../class/vegetable.php");
					$p=new vegetable();
					if(empty($_POST['checkbox']) || $_POST['checkbox'][2]){
						$p->getAll2();
					}
					else{
						$arrayy=array(
							1=>1,
							2=>2,
							3=>3,
						);
						foreach($_POST['checkbox'] as $a){
							$arrayy[$a];
							$p->getByValue($arrayy[$a]);
						}
					}
				?>
			</div>
			</form>
		</div>
</body>
<style>
	body{
		margin: 0;
	}
	.frame{
		width: 80%;
		height: 850px;
		border: 1px solid #bfbfbf;
		margin: 5% 10% 0px 10%;
		display: flex;
	}
	.frame-category{
		width: 14%;
		display: block;
	}
	.frame-product{
		width: 86%;
		display: box;
	}
	.frame-sub-product{
		width: 100%;
		height: 646px;
		display: flex;
		flex-wrap: wrap;
	}
	.frame-title{
		margin: 10px 0px 10px 5%;
		font-family: Arial;
		font-size: 30px;
		font-weight: bold;
	}
	.margin-text{
		margin: 20px 0px 20px 10px;
	}
	.margin-cb{
		margin: 25px 10px 25px 10px;
	}
	.frame-text{
		font-family: Arial;
		font-size: 20px;
	}
	.container{
		width: 250px;
		height: 350px;
		margin-left: 60px;
		margin-bottom: 50px;
		border: 1px solid #bfbfbf;
	}
	.container-images{
		width: 200px;
		height: 200px;
		padding: 25px;
	}
	.price-tag{
		background-color: #ffc107;
		color: white;
		font-weight: bold;
		padding: 5px 5px 5px 5px;
		margin-left: 5px;
		margin-top: -5px;
		border-radius: 8px;
		font-size: 18px;
	}
	.buy{
		background-color: #dc3546;
		color: white;
		border: none;
		padding: 10px 10px 10px 10px;
		margin-left: 20px;
		margin-top: 10px;
		border-radius: 5px;
		font-size: 20px;
	}
</style>
</html>