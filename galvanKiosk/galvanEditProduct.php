<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Edit Product</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='css/galvanStyle.css'>
</head>

<style>
body { background-color: goldenrod; }
.center { text-align: center; }
</style>

<body>

<?php
include_once('galvanConnection.php');
$product_id = $_GET['product_id'];

$search_product = mysqli_query($galvan_conn, "SELECT * FROM `products` WHERE `product_id` = '$product_id'");

if ($row = mysqli_fetch_assoc($search_product)) { ?>
<form action="galvanEditProductAction.php" method="post">
<input type="hidden" value="<?= $row['product_id']?>" name="product_id"> 
<input type="hidden" value="<?= $row['image_url'] ?>" name="image">

<table>
<tr>
<td><label for="name"><b>Product Name</b></label></td>
<td><input class="inputname" type="text" placeholder="Enter Product Name" name="name" value="<?= $row['name'] ?>" required></td>
</tr>

<tr>
<td><label for="unit"><b>Unit</b></label></td>
<td><input class="inputname" type="text" placeholder="Enter Unit" name="unit" value="<?= $row['unit'] ?>" required></td>
</tr>

<tr>
<td><label for="price_per_unit"><b>Price per Unit</b></label></td>
<td><input class="inputpass" type="text" placeholder="Enter Price per Unit" name="price_per_unit" value="<?= $row['price_per_unit'] ?>" required></td>
</tr>

<tr>
<td><label for="image_url"><b>Image URL</b></label></td>
<td><input class="inputpass" type="file" name="image_url"></td>
</tr>

<table>
<button type="submit" class="galvanCompute" name="update">Update</button>
<button type="submit" formaction="galvanProduct.php" class="galvanClear">Cancel</button>
</form>
<?php } ?>
</div>
</body>
</html>