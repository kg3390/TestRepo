<?php 
include_once('galvanConnection.php'); 

if(isset($_POST['register'])){
$name=$_POST['productname'];
$unit=$_POST['unit'];
$price_per_unit=$_POST['Price_per_Unit'];
$image_url=$_POST['image_url'];

$customer = mysqli_query($galvan_conn, "INSERT INTO `products` (`name`, `unit`, `price_per_unit`, `image_url`) VALUES ('$name', '$unit', '$price_per_unit', '$image_url')");

if ($customer) 
{
echo '<script> alert ("Product Added Successfully")</script>';
echo '<script> parent.location.href="galvanMainPage.php"</script>';

} else {
echo '<script>alert("Failed to add Product")</script>';
}

} else {
echo '<script> parent.location.href="galvanMainPage.php"</script>';
}
?>
