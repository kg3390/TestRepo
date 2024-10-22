<!DOCTYPE html>
<html>
<head>
<title>Main Page</title>
</head>

<frameset rows="20%,*,10%">
    <frameset cols="70%, *">
        <frame noresize src="galvanHeader.php" scrolling ="NO">
            <frame noresize src="galvanLoginSignUp.php" scrolling ="NO">
        </frameset>

<?php
session_start();

if ($_SESSION['guirre_type'] == 1) {
echo '<frame noresize src="galvanAdminProduct.php" name="mid_column" scrolling="AUTO">'; 
} else {

echo '<frame noresize src="galvanProduct.php" name="mid_column" scrolling="AUTO">';
}
?>

<frame noresize src="galvanFooter.php" scrolling ="NO">
</frameset>

</html>