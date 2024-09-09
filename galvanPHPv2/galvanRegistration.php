<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration Form</title>
  
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
body {
    padding-left: 25%;
    padding-right: 25%;
    padding-top: 5%;
    background-image: url("bg8.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}


.success {
    background-color: #2ecc71 ;
    display: inline-table;
    border: none;
    outline: none;
    cursor: pointer;
    margin: 0 5px;
    color: #ffffff;
    font-size: 1.2rem;
    padding: 10px 20px;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;; ;
    display: inline-table;
    border: none;
    outline: none;
    cursor: pointer;
    margin: 0 5px;
    color: #ffffff;
    font-size: 1.2rem;
    padding: 10px 20px;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;;
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

H2 {
    color: black;
    font-family: 'Poppins', sans-serif;
    font-style: bold;
}

label {
    display: inline-block;
    width: 250px;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    color: white;

}

.lowerTXT {
    display: inline-block;
    width: 150px;
    font-family: 'Poppins', sans-serif;
    font-style: italic;
    font-size: 13px;
    color: white;
}

.long {
    display: inline-block;
    width: 502px;
}

.value {
    display: inline-block;
    width: 502px;
}

input {
    border-radius: 6px;
    margin-right: 5px;
    font-size: 20px;
}
input::placeholder {
    font-size: 15px;
    opacity: 0.5;
    color: grey;
}

fieldset {
    font-family: 'Poppins', sans-serif;
    border: 5px solid #1F497D;
    background: #34495E;
    border-radius: 5px;
    padding: 15px;
}

fieldset legend {
    background: #1F497D;
    color: #fff;
    padding: 5px 10px ;
    font-size: 32px;
    border-radius: 5px;
    box-shadow: 0 0 0 5px grey;
    margin-left: 20px;
}

table {
    margin-left: auto;
    margin-right: auto;
}


.button-48 {
    border-radius: 15px;
    appearance: none;
    background-color: #808b96;
    border-width: 0;
    box-sizing: border-box;
    color: #000000;
    cursor: pointer;
    display: inline-block;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    padding: 15px 20px;
    position: relative;
    text-align: center;
    text-decoration: none;
    text-rendering: geometricprecision;
    text-transform: uppercase;
    transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1),background-color 100ms cubic-bezier(.694, 0, 0.335, 1),color 100ms cubic-bezier(.694, 0, 0.335, 1);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: baseline;
    white-space: nowrap;
    width: 250px;
}

.button-48:before {
    animation: opacityFallbackOut .5s step-end forwards;
    border-radius: 15px;
    backface-visibility: hidden;
    background-color: #28b463;
    clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transform: translateZ(0);
    transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
    width: 100%;
}

.button-48:hover:before {
  animation: opacityFallbackIn 0s step-start forwards;
  clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
}

.button-48:after {
  background-color: #FFFFFF;
}

.button-48 span {
  z-index: 1;
  position: relative;
}

.message {
    background-color: #e74c3c ;
    display: inline-table;
    border: none;
    outline: none;
    cursor: pointer;
    margin: 5px 5px;
    color: #ffffff;
    font-size: 1.2rem;
    padding: 10px 20px;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;;
}

p {
    background-color:  #fff;
    padding: 10px 20px;
    border-radius: 10px;
}


</style>

</head>
<body>

<!--Error code & DB connect-->
<fieldset style="min-height:100px">
<?php echo "<legend><b>Registration Form</b></legend>" ?>

<?php
if (isset($_POST['submit'])) {
    $Fname = $_POST["KFname"];
    $Lname = $_POST["KLname"];
    $Kpass1 = $_POST["KPassword1"];
    $Kpass2 = $_POST["KPassword2"];
    $email = $_POST["KEmail"];
    $Area = $_POST['KArea'];
    $Phone = $_POST['KPhone'];
    $Address = $_POST['KAddress'];
    $City = $_POST['KCity'];
    $State = $_POST['KState'];
    $Zip = $_POST['KZip'];
    $Country = $_POST['KCountry'];
    $Company = $_POST['KCompany'];
    $Attendee = $_POST['KAttendee'];

    $errors = array();
    
    if (empty($Fname) OR empty($Lname) OR empty($Kpass1) OR empty($Kpass2) OR empty($email) OR empty($Area) OR empty($Phone) OR empty($Address) OR empty($City) OR empty($State) OR empty($Zip) OR empty($Country) OR empty($Company) OR empty($Attendee)) {
        echo "<center><div class='message'>All fields are required</div>";
        array_push($errors,"");
    }

    if (strlen($Kpass1)<8) {
        echo "<div class='message'>Password must be at least 8 characters long</div>";
        array_push($errors,"");
    }
    if ($Kpass1!==$Kpass2) {
        echo "<div class='message'>Password does not match</div>";
        array_push($errors,"");
    }

    require_once "database.php";

    $sql = "SELECT * FROM users WHERE firstname = '$Fname'";
    $result = mysqli_query($db, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
    echo "<div class='message'>First Name already exist</div>";
    array_push($errors,"");
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
    echo "<div class='message'>Email already exist</div>";
    array_push($errors,"");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error;
       
    }
    }else{
    
    $sql = "INSERT INTO users (firstname, lastname, pass, email, area, phone, address, city, state, zip, country, company, attendee) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
    $stmt = mysqli_stmt_init($db);
    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt,"sssssssssssss",$Fname, $Lname, $Kpass1, $email, $Area, $Phone, $Address, $City, $State, $Zip, $Country, $Company, $Attendee);
        mysqli_stmt_execute($stmt);
        echo "<center><div class='success'>You are registered successfully.</div></center>";
    }else{
        die("Something went wrong");
    }
    }
}
?>
<!--Registration form-->
<form action="galvanRegistration.php" method="post">
<br>

<table name="Full Name">
<tr>
    <td><label>Full Name :</label></td>
    <td><input type="text" name="KFname" placeholder=" First Name: "></td>
    <td><input type="text" name="KLname" placeholder=" Last Name: "></td>
    
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
    <td><input type="password" name="KPassword1" placeholder=" Password: "></td>
    <td><input type="password" name="KPassword2" placeholder=" Confirm Password: "></td>
    
</tr> 
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">Password</label></td>
    <td><label class="lowerTXT">Confirm Password</label></td>
</tr>
   
</table>

<table Name="Email">
<tr>
    <td><label>E-Mail :</label></td>
    <td><input type="email" name="KEmail" class="long" placeholder=" Email: "></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">example@example.com</label></td>
</tr>
</table>

<table Name="Phone Number" Class="TablePhone">
<tr>
    <td><label>Phone Number :</label></td>
    <td><input type="number" name="KArea" placeholder=" Area Code: " 
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" ></td>
    <td><input type="number" name="KPhone" placeholder=" Phone Number: " 
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
    <td><input type="text" name="KAddress" class="long" placeholder=" Street Address: "></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTXT">Street Address</label></td>
</tr>
</table>    

<table Name="TableCity">
<tr>
    <td><label></label></td> 
    <td><input type="text" name="KCity" placeholder=" City: "></td>
    <td><input type="text" name="KState" placeholder=" State/Province: "></td>
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
    <td><input type="number" name="KZip" placeholder=" Zip: "
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4"></td>
    <td><input type="text" name="KCountry" placeholder=" Country:"></td>
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
    <td><input type="text" name="KCompany" class="long" placeholder=" Company Name: "></td>
</tr>
</table>

<table Name="Attendee">
<tr>
    <td><label>Attendee Count :</label></td>
    <td><input type="number" class="value" name="KAttendee" placeholder=" Attendee Count: "
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

<br>
<center><button id="btn01" type="submit" class="button-48" value="Register" name="submit" role="button"><span class="text">REGISTER</span></button></center>



</form>

<table>
<tr>
<td>
<p>Already Registered? <a href="galvanIndex.php">Login Here</a></p>
</td>
</tr>
</table>

</fieldset>
</body>
</html>

