<?php
include_once ('galvanConnection.php');
$id = $_GET['id'];

$search_client = mysqli_query($galvan_conn, "UPDATE `registration`
SET `galvan_status` = 1 WHERE `id` = '$id'");

if ($search_client) {
    echo '<script>alert("Client approved successfully")</script>';
    echo '<script>parent.location.href="galvanMainPage.php"</script>';
} else {
    echo '<script>alert("Failed to approve Client")</script>';
}