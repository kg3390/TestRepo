<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>

<style>

body {background: goldenrod;} 
h1 {color: blue;} 
h1 {font-family: Tahoma;} 
h1 {text-align: left;} 
h1 {font-size: 40px;} 
h2 {color: green;} 
h2 {font-family: Verdana;} 
h2 {text-align: left;} 
h2 {font-size: 25px;} 
p {color: whitesmoke;} 
p {font-family: Helvetica;} 
p {text-align: left;} 
p {font-size: 18px;} 
p {font-weight: 400;}

input { 
    border-radius: 6px;
    margin-left: 10px;
    font-size: 20px;
}

input::placeholder {
    font-size: 15px;
    opacity: 0.5;
    color: grey;
}

label {
    display: inline-block;
    font-size: 20px;
    color: green;
}

.galvanButton1 {
background-color: yellowgreen;
border-color:green;
border-width: 3px;
border-radius: 5px;
font-size: 18px;
font-family: Century Gothic;
font-weight: 400;
width: 120px;
height: 40px;
padding: 8px 15px;
color: #ffffff;
cursor: pointer;
}

.galvanButton2 {
background-color: LightCoral;
border-color: red;
border-width: 3px;
border-radius: 5px;
font-size: 18px;
font-family: Century Gothic;
font-weight: 400;
width: 120px;
height: 40px;
padding: 8px 15px;
color: #ffffff;
cursor: pointer;

}  
</style>

<?php

$bryan = mysqli_connect("localhost","root","","galvancalculator");

// Check connection
if ($bryan === false)
{
die("ERROR:Could not connect." . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

$Username = $_POST['username'];
$Password = $_POST['password']; 

$sql = "SELECT * FROM registration WHERE galvan_Username = '$Username' and galvan_Password = '$Password'";

$result = mysqli_query($bryan,$sql);      
$row = mysqli_num_rows($result);      
$count = mysqli_num_rows($result);

if($count == 1) {

$_SESSION['login_user'] = $Username;
header("location: galvanMainPage.php");
} else {
if (empty($_POST['username']) && empty($_POST['password'])) {
echo "<script> alert ('Please Fill Username and Password'); </script>";

} elseif (empty($_POST['password'])) {
echo "<script> alert ('Please Fill Password')</script>";

} elseif (empty($_POST['username'])) {
echo "<script> alert ('Please Fill Username')</script>";

} else {
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_array($result);
$Username = $row['username'];
$Password = $row['password'];

if ($Username == $Username && $Password == $Password) {
$_SESSION['username'] = $Username;
$_SESSION['password'] = $Password;
}
} else {
echo "<script> alert ('Invalid Username or Password')</script>";

} } }  }
?>

<form class="" action="" method="post" autocomplete="off">

<h1>LOGIN FORM<h1>

<H2>
<table>
<tr>
<td><label for="username" >Username :</label></td>
<td><input type="text" id="username" name ="username" placeholder=" Username: "><br></td>
</tr>

<tr>
<td><label for="password">Password :</label></td>
<td><input type="password" id="password" name ="password" placeholder=" Password: "><br></td>
</tr>

</table>
<br>
<button type="submit" class="galvanButton1">LOGIN</button>
<button type="reset" class="galvanButton2">CLEAR</button>
<br>
<br>

</form>
<p>Not yet registerd? <a href="galvanRegistration.php">Sign-up now</a></p>
</body>
</html>