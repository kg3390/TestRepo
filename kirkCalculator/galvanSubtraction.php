<html>
<head>
<body style="background-color: goldenrod"; text-align="left"></body>

<script>
var numOne, numTwo, res, temp;
function fun()
{
  numOne = parseInt(document.getElementById("one").value);
  numTwo = parseInt(document.getElementById("two").value);
  if(numOne && numTwo)
  {
    temp = document.getElementById("res");
    temp.style.display = "block";
    res = numOne - numTwo;
    document.getElementById("subtract").value = res;
  }
}

function reset() {
    document.getElementById("myForm").reset();
}
</script>

<style>

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    
    label {
    width: 320px;
    display: inline-block
    }

</style>

<fieldset>
    <h2><center><font color="Blue"; face="Tahoma";>SUBTRACTION</font></center></h2>
    </fieldset>
    <br>

<fieldset>

<form id="myForm">    

<center>
<p id="input">
<h3><font color="Blue"; face="Tahoma";>
    <label>Input First Number :</label> 
    <input id="one" style="font-size: 15pt;" type="number">
    </font></h3>

<h3><font color="Blue"; face="Tahoma";>
    <label>Input Second Number :</label> 
    <input id="two" style="font-size: 15pt;" type="number">
    </font></h3>

    <button id="b1" 
    style="background-color: green; 
            border-color: green; color:white; 
            font-family:Century Gothic; 
            font-size:20px; 
            width:150px; 
            height:65px" 
    onclick="fun();return false">SUBTRACT</button>

<button id="b2"
    style="background-color: yellowgreen; 
            border-color: green; 
            color:white; 
            font-family:Century Gothic; 
            font-size:20px; 
            width: 150px; 
            height:65px" 
    onclick="reset();return false">CLEAR</button>
<p id="res">    
<h3><font color="Blue"; face="Tahoma";>
    <label id="l1"><font color="red">The Difference of Two Numbers :</font></label>
    <input id="subtract" style="font-size: 15pt;">
</p>
</p>
</center>    

</form>

</fieldset>


    

</head>
</html>