<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/galvanStyle.css">
    <title>Sign Up</title>
    <style>
        body {
            background-color: Lightsalmon;
        }
    </style>
</head>
<body>
    <?php
    include_once('galvanConnection.php');

    // Create connection
    $GalvanDB = mysqli_connect("localhost", "root", "", "galvan_kiosk");

    // Check connection
    if ($GalvanDB === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Taking values from the form data (input textbox)
    if (isset($_POST['submit'])) {
        $galvanFname = $_POST['galvan_Fname']; // Changed input names to valid ones
        $galvanLname = $_POST['galvan_Lname'];
        $galvanEmail = $_POST['galvan_Email'];
        $galvanUsername = $_POST['galvan_Username'];
        $galvanPassword = $_POST['galvan_Password'];
        $galvanConfirmedPassword = $_POST['galvan_ConfirmedPassword'];
        $galvanType = 0; // Setting default values for type and status
        $galvanStatus = 0;

        // Insert the data into the table
        $galvan = "INSERT INTO registration (galvan_Fname, galvan_Lname, galvan_Email, galvan_Username, galvan_Password, galvan_ConfirmedPassword, galvan_type, galvan_status) 
                   VALUES ('$galvanFname', '$galvanLname', '$galvanEmail', '$galvanUsername', '$galvanPassword', '$galvanConfirmedPassword', '$galvanType', '$galvanStatus')";

        // Check if the query is successful
        if (mysqli_query($GalvanDB, $galvan)) {
            echo "<h1>Registration Successful.</h1>";
            echo "<h2>Hello, $galvanFname $galvanLname</h2>";
        } else {
            echo "ERROR: Sorry, there was an issue. " . mysqli_error($GalvanDB);
        }

        // Close connection
        mysqli_close($GalvanDB);
    }
    ?>
    
    <a href="galvanlogin.php" class="galvanView">LOGIN</a>
</body>
</html>
