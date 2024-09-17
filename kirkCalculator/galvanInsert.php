<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION</title>
<style>

body {background: goldenrod;} 
h1 {color: blue;} 
h1 {font-family: Tahoma;} 
h1 {text-align: center;} 
h1 {font-size: 40px;} 
h2 {color: green;} 
h2 {font-family: Verdana;} 
h2 {text-align: center;} 
h2 {font-size: 25px;} 
p {color: whitesmoke;} 
p {font-family: Helvetica;} 
p {text-align: center;} 
p {font-size: 25px;} 

.galvanLogin {
background-color: #e74c3c;
border-color:green;
font-size: 18px;
width: 250px;
height: 70px;
color: #ffffff;
padding: 8px 15px;
border-radius: 5px;
font-family: Century Gothic;
cursor: pointer;
} 

</style>
<?php

// create connection
// $connection name = mysqli_connect ("servername/host", "username","password", "DB name")
$galvanDB = mysqli_connect("localhost","root","","galvancalculator");

// Check connection
if ($galvanDB === false)
{
die("ERROR:Could not connect." . mysqli_connect_error());
}

// Taking  values from the form data(input textbox)
if($_SERVER["REQUEST_METHOD"] == "POST") {
$galvanFname = $_REQUEST["galvan_Fname"];
$galvanLname = $_REQUEST["galvan_Lname"];
$galvanEmail = $_REQUEST['galvan_Email'];
$galvanUsername = $_REQUEST['galvan_Username'];
$galvanPassword = $_REQUEST['galvan_Password'];
$galvanConfirmedPassword = $_REQUEST['galvan_ConfirmPass'];
$galvanArea = $_REQUEST["galvan_Area"];
$galvanPhone = $_REQUEST["galvan_Phone"];
$galvanAddress = $_REQUEST["galvan_Address"];
$galvanCity = $_REQUEST["galvan_City"];
$galvanState = $_REQUEST["galvan_State"];
$galvanZip = $_REQUEST["galvan_Zip"];
$galvanCountry = $_REQUEST["galvan_Country"];
$galvanCompany = $_REQUEST["galvan_Company"];
$galvanAttendee = $_REQUEST["galvan_Attendee"];

//  insert the data into  table
//sql name = "INSERT INTO tableName VALUES ('$textBox','$textBox')";
$galvanConnection = "INSERT INTO registration VALUES ('$galvanFname','$galvanLname', '$galvanEmail', '$galvanUsername', '$galvanPassword','$galvanConfirmedPassword'
                                                                                ,'$galvanArea','$galvanPhone','$galvanAddress','$galvanCity','$galvanState','$galvanZip','$galvanCountry','$galvanCompany','$galvanAttendee')";

// Check if the query is successful

if (mysqli_query($galvanDB,$galvanConnection))
{
echo "<h1>Registered Successfully</h1>";

echo ("<h2>Hi $galvanFname  $galvanLname 😄</h2>");
} else {
echo "ERROR:Sorry $galvanConnection. " . mysqli_error($galvanDB);
}

// Close connection
mysqli_close($galvanDB);
}
?>

<br>
<center><a href="galvanLogin.php" class="galvanLogin">LOGIN</a></center>

</html>