<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/galvanStyle.css">

</head>
<title>Login and Sign-Up Page</title>

<style>
body {
    background-color: goldenrod;
}
</style>

<body> 
<?php
session_start();

if (isset($_SESSION["login"]) == true) {
if ($_SESSION["type"] == 1) {

    echo '<a href="galvanClient.php" target="mid_column">
                <button class="galvanView">View Clients</button></a>';
    echo '<a href="galvanAdminProduct.php" target="mid_column">
                <button class="galvanView">View Products</button></a>';

}              
    echo '<p><a href="galvanLogout.php" target="mid_column">
                <button class="galvanClear">Logout</button></a>'; 

} else {
echo '<p><a href="galvanRegistration.php" target="mid_column">
                <button class="galvanRegister">Registration</button></a>
                    
                <a href="galvanLogin.php" target="mid_column">
                <button class="galvanLogin">Login</button></a>';
}
?>


</body>
</html>