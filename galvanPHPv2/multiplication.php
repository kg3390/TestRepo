<html>
<head>
</head>
<body style="background-image: linear-gradient(to bottom right, #212f3d, #ecf0f1 );"></body>

<!--Style-->
<style>

.fa-xmark {
  background-color: #9ccc65;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

label {
  color: #2c3e50;
  font-family: Tahoma;
  text-align: center;
  padding-top: 12px;
  font-size: 25px;
  text-shadow: 0px 0px 2px #424949 
}

input {
  margin-left: 20px;
  width: 250px;
}

.Result {
  display: inline-block;
  font-family: Tahoma;
  font-size: 25px;
  color: red;
}

.btn-1 {
  text-align: center;
  display: inline-block;
  padding: 15px 40px;
  border: 3px solid #1a5276 ;
  cursor: pointer;
  letter-spacing: 2px;
  position: relative;
  overflow: hidden;
  margin: 0 20px;
  width: 230px; 
  height:65px; 
  background-color: #5dade2;
  border-radius: 15px;
  font-size: 20px;
  font-family: Century Gothic; 
  color: #fff;
  text-shadow: 0px 0px 10px black; 
}

.btn-1:before {
  content: "";
  position: absolute;
  height: 150px;
  width: 50px;
  background : #fff;
  left: -55px;
  top: -40px;
  transform: rotate(37deg);
  transition: all .3s;
  opacity: 0.3;
}

.btn-1:hover:before {
  left:95%;
}

.btn-2 {
  text-align: center;
  display: inline-block;
  padding: 15px 40px;
  border: 3px solid #1a5276 ;
  cursor: pointer;
  letter-spacing: 2px;
  position: relative;
  overflow: hidden;
  margin: 0 20px;
  width: 200px; 
  height:65px; 
  background-color: #9ccc65;
  border-radius: 15px;
  font-size: 20px;
  font-family: Century Gothic; 
  color: #fff;
  text-shadow: 0px 0px 5px black; 
}

.btn-2:before {
  content: "";
  position: absolute;
  height: 150px;
  width: 50px;
  background : #fff;
  right: -40px;
  top: -40px;
  transform: rotate(37deg);
  transition: all .3s;
  opacity: 0.3;
}

.btn-2:hover:before {
  right: 105%;
}

fieldset {
  font-family: 'Poppins', sans-serif;
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
  box-shadow: 0 0 0 5px #3498db  ;
  margin-left: 20px;
}

.calc {
  width: 25;
  height: 23;
  position: relative;
  top: 3px;
}
  
</style>

<!--Input and Result(result will be Echoed)-->
<br>
<fieldset style="min-height:100px">
<?php echo "<legend><b>Multiplication</b></legend>" ?>
<form method="post" id="myform" name="calcf">



<center>

<!--input field-->
<table>
<tr>
<td><?php echo "<label>Enter First Number: </label>" ?></td>
<td><input type="number" name="number1" id="num1" style="font-size: 25px"/></td>
</tr>

<br>

<tr>
<td><?php echo "<label>Enter Second Number: </label>" ?></td>
<td><input type="number" name="number2" id="num2" style="font-size: 25px" /></td>
</tr>
</table>

<br>

<!--Button Field-->
<table>
<tr>
<td>
<button id="b1" class="btn-1" type="submit" name="submit" disabled="disabled">MULTIPLY <img class="calc" src="Multiply.png"></button>
</td>
<td>
<button id="b2" class="btn-2" onclick="document.getElementById('$equals').value = ''">CLEAR ❌</button>
</td>
</tr>
</table>

<!--Result Field-->
<h4><label class="Result" name="number3">The Product of two numbers: <?php if(isset($_POST['submit']))  
  {  
    $number1 = $_POST['number1'];  
    $number2 = $_POST['number2'];  
    $equals =  $number1*$number2;     
        
    echo $equals;   
  }?>
</label></h4>

<!--Button1 disabler script and clear button-->
<script>
function reset() {
    document.getElementById("myform").reset();
}

myform.addEventListener('input', () => {
  if (num1.value.length > 0 && num2.value.length > 0) {
    b1.removeAttribute('disabled');
  } else {
    b1.setAttribute('disabled', 'disabled');
  }
})
</script>

</center>
</form>
</fieldset>

</html>