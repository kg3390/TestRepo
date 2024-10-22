<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="CSS/galvanStyle.css">
<title>Products Available</title>
<style>
body { background-color: goldenrod; }
.center { text-align: center; }
</style>
</head>

<body> 
<h1 class ="center">Products Available</h1> 
<form action="" method="post">

<div class="content">
<?php
include_once('galvanConnection.php');

// Query to fetch products
$search_product = mysqli_query($galvan_conn, "SELECT * FROM `products`");

if (!$search_product) {
    die("Query failed: " . mysqli_error($galvan_conn));
}

// Loop through the products and display them
while ($row = mysqli_fetch_assoc($search_product)) { ?>
    <div class="product-container">

        <div class="galvanImgContainer">
            <img class="product_img" src="pictures/<?php echo $row['image_url']?>" alt="">
        </div>

        <div class="galvanInfoContainer ">
            
<h2>Product Name: <label class='galvanlblInline'><?= $row['name'] ?></label></h2>
<h2>Product Price: <label class='galvanlblInline'><?= $row['price_per_unit'] ?></label></h2>
        </div>

        <div class="galvanBtnContainer">
        
            <a class="galvanBtn1" href="galvanOrderAction.php?product_id=<?= $row['product_id'] ?>">
                View Product
            </a>

        </div>
    </div>
<?php } ?>

</form>	
</body>
</html>
