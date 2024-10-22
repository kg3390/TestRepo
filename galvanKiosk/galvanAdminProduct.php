<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/galvanStyle.css">
<title>Available Products</title>
<style>
body { background-color: goldenrod; }
.center { text-align: center; }
</style>
</head>

<body>

<h1 class="center">Available Products</h1>

<button class="galvanCompute" onclick="document.location='galvanAddProducts.php'">Add Product</button>

<form action="" method="post">

<div class="content">
<table class="table">
<tr>
<td><h2>Product Name</h2></td>
<td><h2>Unit</h2></td>
<td><h2>Price per Unit</h2></td>
<td><h2>Image</h2></td>
<td><h2>Action</h2></td>
</tr>
<?php 
include_once('galvanConnection.php');

$search_product = mysqli_query($galvan_conn, "SELECT * FROM `products`");                                                                   
while ($row = mysqli_fetch_assoc($search_product)) { ?>
<tr>
<td><h2><?= $row ['name'] ?></h2></td>
<td><h2><?= $row ['unit'] ?></h2></td>
<td><h2><?= $row ['price_per_unit'] ?></h2></td>
<td><img src="pictures/<?= $row ['image_url'] ?>" alt=""></td>
<td>
<a href="galvanEditProduct.php?product_id=<?= $row['product_id'] ?>" class="galvanBtn1">Edit</a>
<a href="galvanDeleteProduct.php?product_id=<?= $row['product_id'] ?>" class="galvanBtn1" 
    onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
</td>
</tr>

<?php } ?>

</table>
</div>
</form>
</body>
</html>
