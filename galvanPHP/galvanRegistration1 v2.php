<html>
<head></head>
<body>

<!--CSS-->
<style>

h1 {
    color: black;
    font-family: Century Gothic;
    font-style: bold;
}


label {
    display: inline-block;
    width: 250px;
    font-family: Century Gothic;
    font-size: 20px;
    color: black;
    
}

.echo {
    font-family: Century Gothic;
    font-size: 20px;
    color: black;
}

.lowerTXT {
    display: inline-block;
    width: 150px;
    font-family: verdana;
    font-style: italic;
    font-size: 13px;
    color: gray;
}

input {
    border-radius: 6px;
    margin-right: 5px;
    font-size: 20px;
  }

.long {
    display: inline-block;
    width: 511px;
}


.dollar {
    font-family: Century Gothic;
    font-size: 20px;
    color: black;
}

.Max {
    display: inline-block;
    width: 150px;
    margin-left: 65px;
    font-family: verdana;
    font-style: italic;
    font-size: 13px;
    color: gray;
}

.value2 {
    display: inline-block;
    width: 446px;
}

.result {
    width: 100px;
    text-align: left;
    background-color: #ccd1d1;
    border: none;
    outline: none;
}

.Table {
    margin-top: 10px;
    margin-bottom: 8px;
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

.info1 {
    color: black;
    font-family: Century Gothic;
    font-size: 20px;
 }

 .info2 {
    display: inline-block;
    field-sizing: content;
    text-align: left;
    background-color: #ddd;
    border: none;
    outline: none;
    font-family: Century Gothic;
    
 }

.Button1 {
    background-color: #0099ff;
    border-color: #273746;
    border-radius: 1000px;
    color: white;
    font-family: Century Gothic;
    font-size: 20px;
    width: 180px;
    height: 50px;

}

.Button2 {
    background-color: #5dade2;
    border-color: #273746;
    border-radius: 1000px;
    color: white;
    font-family: Century Gothic;
    font-size: 20px;
    width: 180px;
    height: 50px;
}

.show {
    background-color: #17a589;
    border-color: #273746;
    border-radius: 8px;
    color: white;
    font-family: Century Gothic;
    font-size: 15px;
    width: 100px;
    height: 50px;
}

.hide {
    background-color: #138d75;
    border-color: #273746;
    border-radius: 8px;
    color: white;
    font-family: Century Gothic;
    font-size: 15px;
    width: 100px;
    height: 50px;
}


fieldset {
    font-family: sans-serif;
    border: 5px solid #1F497D;
    background: #ddd;
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

</style>

<script>
function showElement() {
    element = document.querySelector('.container');
    element.style.visibility = 'visible';

}

function hideElement() {
    element = document.querySelector('.container');
    element.style.visibility = 'hidden';

}
</script>


<!--//Registration form field-->
<center>
<fieldset style="min-height:100px">
<?php echo "<legend><b>Registration Form</b></legend>" ?>

<form name="form" action="" method="POST">

<table Name="Full Name">
<tr>
    <td><label>Full Name :</label></td>
    <td><input type="text" id="KFname" name="K1" required><br></td>
    <td><input type="text" id="KLname" name="K2" required><br></td>
</tr>

<tr>
    <td><label></label></td>
    <td><label class="lowerTxt">First Name</label></td>
    <td><label class="lowerTxt">Last Name</label></td>
</tr>
</table>

<table Name="Email">
<tr>
    <td><label>E-Mail :</label></td>
    <td><input type="email" class="long" id="KEmail" name="K3" required><br></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTxt">example@example.com</label></td>
    </tr>
</table>

<table Name="Phone Number" Class="TablePhone">
<tr>
    <td><label>Phone Number :</label></td>
    <td><input type="number" id="KArea" name="K4" required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3"><br></td>
    <td><input type="number" id="KPtn" name="K5" required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"><br></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTxt">Area Code</label></td>
    <td><label class="lowerTxt">Phone Number</label></td>
</tr>
</table>

<table Name="TableAddress">
<tr>
    <td><label>Address :</label></td>
    <td><input type="text" class="long" id="KAddress" name="K6" required><br></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTxt">Street Address</label></td>
</tr>
</table>    

<table Name="TableCity">
<tr>
    <td><label></label></td>
    <td><input type="text" id="KCity" name="K7" required><br></td>
    <td><input type="text" id="KState" name="K8" required><br></td>
</tr>

<tr>
    <td><label></label></td>
    <td><label class="lowerTxt">City</label></td>
    <td><label class="lowerTxt">State/Province</label></td>
</tr>
</table>

<table class="TableZip">
<tr>
    <td><label></label></td>
    <td><input type="number" id="KZip" name="K9" required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4"><br></td>
    <td><input type="text" id="KCountry" name="K10" required><br></td>
</tr>
    
<tr>
    <td><label></label></td>
    <td><label class="lowerTxt">Postal/Zip Code</label></td>
    <td><label class="lowerTxt">Country</label></td>
</tr>
</table>

<table Name="Company">
<tr>
    <td><label>Company Name :</label></td>
    <td><input type="text" class="long" id="KCompany" name="K11" required><br></td>
</tr>
</table>

<table Name="Attendee">
<tr>
    <td><label>Attendee Count :</label></td>
    <input id="value1" type="hidden" value="500" name="K12">
    <td class="dollar">$500 x <input type="number" class="value2" id="KAttendee" name="K13" required
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" min='1' max='10'
        onclick="compute()" onkeyup="compute()" required></td>
</tr>
<tr>
    <td><label></label></td>
    <td class="Max">Max 10 Attendee</td>
</tr>
    

<script for ="value2">
        document.getElementsByClassName('value2')[0].oninput = function () {
        var max = parseInt(this.max);
        if (parseInt(this.value) > max) {
            this.value = max; 
        }
    }
</script>
</tr>
</table>

<br>
<button class="Button1" type="submit">VIEW</button>
</form>
</fieldset>
</center>

<center>
<br>
<table>
<tr>
<td><button class="show" id="s1" onclick="showElement()">SHOW</button></td>
<td><button class="hide" id="h1" onclick="hideElement()">HIDE</button></td>
</tr>
</table>
</center>

<!--//Information field and compute function-->
<center>
<div class="container">
<fieldset style="min-height:100px;">
<?php echo "<legend><b> Your Information</b></legend>" ?>
<table class="echo">
<tr>
<td>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
//get the value of the input textbox
{
$KFname = $_POST['K1'];
$KLname = $_POST['K2'];
$KEmail = $_POST['K3'];
$KArea = $_POST['K4'];
$KPtn = $_POST['K5'];
$KAddress = $_POST['K6'];
$KCity = $_POST['K7'];
$KState = $_POST['K8'];
$KZip = $_POST['K9'];
$KCountry = $_POST['K10'];
$KCompany = $_POST['K11'];
$KCompute = $_POST['K12'];
$KAttendee = $_POST['K13'];

$compute = $KCompute * $KAttendee;

//display the content of the textbox
echo "Full Name: $KFname $KLname<br>";
echo "<br>";
echo "Email: $KEmail <br>";
echo "<br>";
echo "Phone Number: +$KArea $KPtn<br>";
echo "<br>";
echo "Address: $KAddress $KCity $KState $KZip $KCountry <br>";
echo "<br>";
echo "Company Name: $KCompany <br>";
echo "<br>";
echo "Attendee Count: $KAttendee <br>"; 
echo "<br>";
echo "Total Amount: $$compute <br>"; 
echo "<br>";
}
?>
</td>
</tr>
</table>


</fieldset>
</div>
</center>



</body>
</html>