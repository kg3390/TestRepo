<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/galvanStyle.css">
<title>Galvan Kiosk</title>
<style>
body {background: goldenrod;}
</style>
</head>

<?php
include_once('galvanConnection.php');
session_start();

if (isset($_POST["SUBMIT"])) {
$galvanUsername = $_POST["galvan_Username"];
$galvanPassword = $_POST["galvan_Password"];

$login = mysqli_query($galvan_conn, "SELECT * FROM registration WHERE galvan_Username = '{$galvanUsername}' or galvan_Password = '{$galvanPassword}'");
$row = mysqli_fetch_assoc($login);

if (mysqli_num_rows($login) > 0) {
if ($galvanPassword == $row["galvan_Password"]) {
if ($row["galvan_status"] == 1) {
     if ($row["galvan_type"]  == 1) {
        $_SESSION["login"]= true;
        $_SESSION["type"] = $row["galvan_type"];
    echo '<script>parent.location.href="galvanMainPage.php"</script>';
} else {
    $_SESSION["login"] = true;
    $_SESSION["type"] = $row["galvan_type"];
    echo '<script>parent.location.href="galvanMainPage.php" </script>';
}
} else {
    echo "<script> alert ('Your account is currently inactive.'); </script>";
}
} else {
    echo "<script> alert ('Incorrect Password'); </script>";
}
} else {
    echo "<script> alert ('Username not registered'); </script>";
}
}
?>

<form class="" action="galvanLogin.php" method="post" autocomplete="off">

<h1>LOGIN FORM</h1>

<H2>
<table> 
<tr>

<td><label for="username">Username</label> </td>
<td><input type="text" id="galvanUsername" name="galvan_Username" required value=""><br> </td>
</tr>
<tr>
<td><label for="password">Password</label></td>
<td><input type="password" id="galvanPassword" name="galvan_Password" required value=""><br> </td>
</tr>
</table> <br>
<button type="submit" name="SUBMIT"  class="galvanView"> LOGIN </button> 
<button type="reset" name="CLEAR" class="galvanClear"> CLEAR </button>
<br>
<br>
<br>
<!-- <a href="guirre Registration.php" class="guirreView"> REGISTRATION </a>-->

</form> 
</body>
</html>