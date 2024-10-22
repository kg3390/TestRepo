<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/galvanStyle.css">
<title>Galvan Kiosk</title>

<style>
body {background-color: goldenrod;}
.center {text-align: center;}
</style>

</head>

<body>
<h1 class="center">Clients</h1>
<div class="content"> 
    
<table class="table">
<tr>
<td> <h2>FIRST NAME</h2> </td> 
<td> <h2>LAST NAME</h2> </td>
<td> <h2>EMAIL</h2> </td>
<td> <h2>TYPE</h2> </td>
<td> <h2>STATUS</h2> </td>
</tr>

<?php
include_once('galvanConnection.php');
$search_clients = mysqli_query($galvan_conn, "SELECT * FROM `registration`"); 
while ($row = mysqli_fetch_assoc($search_clients)) { ?>


<tr>

<td>
<h2> <?= $row['galvan_Fname'] ?></h2> 
</td> 

<td>
<h2> <?= $row['galvan_Lname'] ?></h2> 
</td>

<td>
<h2> <?= $row['galvan_Email'] ?></h2>
</td>

<td>
<h2><?= $row['galvan_type'] === '0' ? 'Client' : 'Admin'  ?></h2>
</td>

<td>
<?php
if ($row['galvan_status'] === '0') { ?>
<a href="galvanClientAction.php?id=<?= $row['ID']?>" class="galvanBtn1">Approve</a>

<?php } else { ?>

<h2>
<?= $row['galvan_status'] ==='0' ? 'Inactive': 'Active' ?> 
</h2>

<?php } ?>

</td>
</tr>

<?php } ?>

</table>
</div>


</body>
</html>