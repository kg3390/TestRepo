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
h2 {font-family: Century Gothic;} 
h2 {text-align: left;} 
h2 {font-size: 20px;} 
p {color: whitesmoke;} 
p {font-family: Helvetica;} 
p {text-align: center;} 
p {font-size: 18px;} 

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
    width: 250px;
    font-size: 20px;
    color: green;
}

.long {
    display: inline-block;
    width: 512px;
}

.value {
    display: inline-block;
    width: 512px;
}

.lowerTXT {
    display: inline-block;
    position: relative;
    font-size: 14px;
    font-family: Century gothic;
    font-style: italic;
    top: -5px;
    margin-left: 15px;
}

.TablePhone{
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    }
}

.TableZip{
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    }
}


.galvanSubmit {
background-color:  yellowgreen;
border-color:green;
color: white  ;
border-width: 3px;
font-size: 20px;
width: 150px;
height: 40px;
cursor: pointer;
}

</style>

</head>

<body>

<form class=""  action="galvanInsert.php" method="post" autocomplete="off">

<h1>REGISTRATION FORM<h1>

<h2>   
<center>
<table name="Full Name">
<tr>
    <td><label>Full Name :</label></td>
    <td><input type="text" name="galvan_Fname" placeholder=" First Name: " required></td>
    <td><input type="text" name="galvan_Lname" placeholder=" Last Name: " required></td>
    
</tr> 
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">First Name</label></td>
    <td><label class="lowerTXT">Last Name</label></td>
</tr>
   
</table>

<table name="Password">
<tr>
    <td><label>Password :</label></td>
    <td><input type="password" name="galvan_Password" placeholder=" Password: " required></td>
    <td><input type="password" name="galvan_ConfirmPass" placeholder=" Confirm Password: " required></td>
    
</tr> 
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">Password</label></td>
    <td><label class="lowerTXT">Confirm Password</label></td>
</tr>
   
</table>

<table Name="Username">
<tr>
    <td><label>Username :</label></td>
    <td><input type="text" name="galvan_Username" class="long" placeholder=" Username: " required></td>
</tr>
</table>

<table Name="Email">
<tr>
    <td><label>E-Mail :</label></td>
    <td><input type="email" name="galvan_Email" class="long" placeholder=" Email: " required></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">example@example.com</label></td>
</tr>
</table>

<table Name="Phone Number" Class="TablePhone">
<tr>
    <td><label>Phone Number :</label></td>
    <td><input type="number" name="galvan_Area" placeholder=" Area Code: " required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" ></td>
    <td><input type="number" name="galvan_Phone" placeholder=" Phone Number: " required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">Area Code</label></td>
    <td><label class="lowerTXT">Phone Number</label></td>
</tr>
</table>

<table Name="TableAddress">
<tr>
    <td><label>Address :</label></td>
    <td><input type="text" name="galvan_Address" class="long" placeholder=" Street Address: " required></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">Street Address</label></td>
</tr>
</table>    

<table Name="TableCity">
<tr>
    <td><label></label></td> 
    <td><input type="text" name="galvan_City" placeholder=" City: " required></td>
    <td><input type="text" name="galvan_State" placeholder=" State/Province: " required></td>
</tr>

<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">City</label></td>
    <td><label class="lowerTXT">State/Province</label></td>
</tr>
</table>

<table class="TableZip">
<tr>
    <td><label></label></td>
    <td><input type="number" name="galvan_Zip" placeholder=" Zip: " required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4"></td>
    <td><input type="text" name="galvan_Country" placeholder=" Country:" required></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">Postal/Zip Code</label></td>
    <td><label class="lowerTXT">Country</label></td>
</tr>
</table>

<table Name="Company">
<tr>
    <td><label>Company Name :</label></td>
    <td><input type="text" name="galvan_Company" class="long" placeholder=" Company Name: " required></td>
</tr>
</table>

<table Name="Attendee">
<tr>
    <td><label>Attendee Count :</label></td>
    <td><input type="number" class="value" name="galvan_Attendee" placeholder=" Attendee Count: " required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" min='1' max='10'></td>
</tr>
<tr>
    <td><label></label></td>
    <td class="lowerTXT">Max 10 Attendee</td>
</tr>

<script for ="Attendee Count">
        document.getElementsByClassName('value')[0].oninput = function () {
        var max = parseInt(this.max);
        if (parseInt(this.value) > max) {
            this.value = max; 
        }
    }
    

</script>

</table>
</center>
</h2>


<center><input type="submit" class="galvanSubmit" value="SUBMIT"></td></center>
</form>

<p>Already Registered? <a href="galvanLogin.php">Login Here</a></p>

</body>
</html>


