
<?php
include_once('galvanConnection.php');
$product_id = $_GET['product_id'];

$search_product = mysqli_query($galvan_conn, "SELECT * FROM `products` WHERE `product_id` = '$product_id'");
$row = mysqli_fetch_assoc($search_product);

$name = $row['name'];
$unit = $row['unit'];
$price_per_unit = $row['price_per_unit'];
$image_url = $row['image_url'];

// SAVE DATA INTO THE ARCHIVE TABLE
$product = mysqli_query($galvan_conn, "INSERT INTO archive (`name`,`unit`, `price_per_unit`, `image_url`) 
VALUES ('$name', '$unit', '$price_per_unit', '$image_url')");

// DELETE DATA FROM THE PRODUCTS TABLE
$delete = mysqli_query($galvan_conn, "DELETE FROM `products` WHERE `product_id` = '$product_id'");
if ($delete) {
echo '<script>alert("Product deleted successfully")</script>';
echo '<script>parent.location.href="galvanMainPage.php"</script>';
} else {
echo '<script>alert("Failed to delete Product")</script>';
}

?>