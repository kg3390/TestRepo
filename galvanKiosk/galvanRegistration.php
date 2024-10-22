<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/galvanStyle.css">
<title>REGISTRATION</title>
<style> body {
background: goldenrod;
} </style>
</head>
<body>
<form class="" action="galvanInsert.php" method="post" autocomplete="off">
<h1>REGISTRATION FORM<h1>
<h2>
<table>
<tr>
<td><label for="galvan Fname">Full Name</label> </td>
<td><input type="text" id="galvanFname" name="galvan_Fname" required value=""><br></td> 
<td><input type="text" id="galvanLname" name="galvan_Lname"><br></td>
</tr>
<tr>
<td><label for="galvanBlankFname1"></label></td>
<td><label for="galvanFname1">First Name</label> </td>
 <td><label for="galvanLname1"> Last Name</label> </td>
</tr>
<tr>
<td><label for="galvanEmail">E-Mail</label></td>
<td><input type="email" id="galvanEmail" name="galvan_Email"><br></td>
</tr>
<tr>
<td><label for="galvanUserName">Username </label></td>
<td><input type="text" id="galvanUsername" name="galvan_Username"><br></td>
</tr>
<tr>
<td><label for="galvanPassword">Password</label></td>
<td><input type="password" id="galvanPassword" name="galvan_Password"><br></td>
</tr>
<tr>
<td><label for="galvanConfirmed Password">Confirmed Password</label></td>
<td><input type="password" id="galvanConfirmedPassword" name="galvan_ConfirmedPassword"><br> </td>
</tr>
<br> </table>
</h2>
<input type="submit" name="submit" class="galvanRegister" value="REGISTER"> 
<input type="reset" name="clear" class="galvanClear" value="CLEAR">
</form>
<br>
</body>
</html>