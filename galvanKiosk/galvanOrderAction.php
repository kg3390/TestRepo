<?php
include_once('galvanConnection.php');
$product_id = $_GET['product_id'];
$sql_search = mysqli_query($galvan_conn, "SELECT * FROM `products` WHERE `product_id` = '$product_id'");

$record = mysqli_fetch_assoc($sql_search); $product_name = $record['name'];
$product_price = $record['price_per_unit'];
$product_img = $record['image_url'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/galvanStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Order</title>
</head>

<style>
    body {background-color: goldenrod;}
    .center {text-align: center;}
</style>

<body>

<form action="galvanOrderNowAction.php" method="post" class="orderForm">
<h1 class="center"> Order Information</h1>
<br>


<div class="Container">

<div class="box1">

<img src="pictures/<?= ''. $product_img; ?>">

</div>

<div class="box2"> 
<h2><label name="name"><?= "" . $product_name; ?></label><br>

<input class="galvanText" type="text" name="txt_price" value="<?= "" . $product_price; ?>" readonly><br>

<input class="galvanText" type="text" name="txt_name" placeholder="Enter name" required><br> 

<input class="galvanText" type="number" name="txt_qty" placeholder="Enter quantity" required><br>

<input class="galvanText" type="number" name="txt_contact" placeholder="Enter mobile number" required><br>

<input class="galvanText" type="hidden" name="txt_itemId" value="<?= $product_id; ?>">

<br>

<input type="submit" name="btn_order" class="galvanCompute" value="ORDER NOW">


</div>



</div>
</form>
</body>
</html>