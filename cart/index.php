<?php
session_start();
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
		<p class="frame-title">Cart</p>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Picture</th>
					<th scope="col">Amount</th>
					<th scope="col">Price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<th>potato</td>
					<th><img class="picture" src="../images/potato.jpg"></td>
					<th>2</td>
					<th>35000</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="3"></th>
					<th>2</th>
					<th>70000</th>
				</tr>
			</tfoot>
        </table>
		<button class="submit-decoration frame-text" name="submit" value="Order" type="submit">Order</button>
	</div>
</body>
<style>
	body{
		margin: 0;
	}
	.frame{
		width: 80%;
		height: 600px;
		border: 1px solid #bfbfbf;
		margin: 5% 10% 0px 10%;
		display: block;
	}
	.frame-title{
		margin: 10px 0px 10px 1%;
		font-family: Arial;
		font-size: 30px;
		font-weight: bold;
	}
	.picture{
		width: 200px;
		height: 200px;
	}
	.frame-text{
		margin: 5% 0px 1% 3%;
		font-family: Arial;
		font-size: 20px;
	}
	.submit-decoration{
		position: absolute;
		border: none;
		background-color: #dc3546;
		color: white;
		padding: 10px 15px 9px 15px;
		border-radius: 5px;
		margin: 10px;
		right: 11%;
		bottom: 250px;
	}
</style>
</html>