<?php

include_once('galvanConnection.php');
$search = mysqli_query($galvan_conn, "SELECT * FROM `orders` ORDER by `order_id` DESC");
$record = mysqli_fetch_assoc($search);
$order_id1 = $record['order_id'];
$item_id = $record['item_id'];
$item_price = $record['total_price'];
$contact = $record['customer_contact']; 
$name = $record['name'];

$search_item = mysqli_query($galvan_conn, "SELECT * FROM `products` WHERE `product_id` = '$item_id'");
$records2 = mysqli_fetch_assoc($search_item);

$img = 'pictures/' . $records2['image_url'];
$price_unit = $records2['price_per_unit']; 
$qty = $item_price / $price_unit;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='CSS/galvanStyle.css'>

<title>Orders List</title>
</head>

<style>
body {background-color: goldenrod; }
.center {text-align: center;}
</style>
<body>  

<form action="galvanOrder.php" method="post" class="orderForm"> 

<h1 class="center">Your Order</h1>

<div class="Container">
<div class="box1">
<img src="<?= $img ?>">
</div>

<div class="box2">

<table class="TB1">
<tr>
    <td><label class="Lwidth">QUANTITY:</label></td>
    <td><label for="Blank"></label></td>
    <td><input type="text" class="galvanText" name="txt_qty" readonly value= "<?= $qty; ?>"></td>
</tr>

<tr>
    <td><label class="Lwidth">PRICE:</label></td>
    <td><label for="Blank"></label></td>
    <td><input type="text" name="txt_price" readonly value="<?= $item_price;?>"></td>
</tr>

<tr>
    <td><label class="Lwidth">NAME OF BUYER:</label></td>
    <td><label for="Blank"></label></td>
    <td><input type="text" name="txt_name" readonly value="<?= $name; ?>"></td>
</tr>

<tr>
<td><label class="Lwidth">MOBILE NUMBER:</label></td>
<td><label for="Blank"></label></td>
<td><input type="number" name="txt_mobile" readonly value="<?= $contact; ?>"></td>
</tr>

</table>


</div>
</div>
<br>
<center><input type="submit" name="btn_submit" class="galvanView" value=" SUBMIT"></center>




</form>

<?php
include_once('galvanConnection.php');
if (isset($_POST['btn_submit'])) {

$order_id = $order_id1;
$product_id = $item_id; 
$quantity = $_POST['txt_qty'];
$price = $_POST['txt_price'];                                                                                                                                                                                                                                                                                                                           

$save = mysqli_query($galvan_conn, "INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`) 
VALUES ('', '$order_id', '$product_id', '$quantity', '$price')");

if ($save) {
    echo "<script>alert('You have successfully ordered!')</script>"; 
    echo '<script>parent.location.href="galvanMainPage.php"</script>';

} else {
    echo "<script> alert('An error occurred!')</script>";
}
}
?>

</body>
</html>