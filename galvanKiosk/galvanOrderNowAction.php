<?php

include_once('galvanConnection.php');

if(isset($_POST['btn_order'])){

$quantity = $_POST['txt_qty'];
$total_price = $quantity * $_POST['txt_price']; 
$date = date('Y-m-d H:i:s');
$customer_contact = $_POST['txt_contact'];
$item_id = $_POST['txt_itemId'];
$name = $_POST['txt_name'];

$save = mysqli_query($galvan_conn, "INSERT INTO orders (`order_id`, `total_price`, `date_time`, `customer_contact`, `item_id`, `name`) 
VALUES ('', '$total_price', '$date', '$customer_contact', '$item_id', '$name')");

if($save){
    echo "<script>alert('Please check your information')</script>";
    echo '<script>window.location.href="galvanOrder.php"</script>';
} else {
    echo "<script> alert('An error occurred!')</script>";
}
}

?>
