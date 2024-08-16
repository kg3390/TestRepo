<!DOCTYPE html>
<html>
<form name="form" action="" method="POST">
<input type="number" name="v1">
<input type="number" name="v2">

<button type="submit">Test</button>
</form>

<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
//get the value of the input textbox
{
$num1 = $_POST['v1'];
$num2 = $_POST['v2'];


$compute = $num1 + $num2;

echo "First Number: $num1 <br>";
echo "Second Number: $num2 <br>";

echo "<br>";

echo "SUM: $$compute <br>";
}

?>
</body>
</html>