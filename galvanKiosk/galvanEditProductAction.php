
<?php
include_once('galvanConnection.php');
if (isset($_POST['update'])) {
$product_id = $_POST['product_id'];
$name = $_POST['name'];
$unit = $_POST['unit'];
$price_per_unit = $_POST['price_per_unit'];


if ($_POST['image_url'] != '') { 
    $image_url = $_POST['image_url'];
} else { 
    $image_url = $_POST['image'];
}

$client = mysqli_query($galvan_conn, "UPDATE `products` SET `name` = '$name', `unit` = '$unit',
`price_per_unit` = '$price_per_unit', `image_url` = '$image_url' WHERE `product_id` = '$product_id'");

if ($client) {
echo '<script>alert("Product updated successfully")</script>';
echo '<script>parent.location.href="galvanMainPage.php"</script>';

} else { 
    echo '<script>alert("Failed to update Product"></script>';
}
} else {
    echo '<script>parent.location.href="galvanMainPage.php"</script>';
}
?>
