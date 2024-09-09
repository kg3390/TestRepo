<html>
<body>

<style>

li {
    color: #3498db;
    font-family: 'Poppins', sans-serif;
}

h3 {
    color: #eaeded;
    font-family: 'Poppins', sans-serif;
}

a {
    color: #ecf0f1;
}

body {
    background-color: #2c3e50;
}


</style>

<div name="navigation"> 

<?php echo "<h3>NAVIGATION MENU</h3>" ?>

    <ul style="color: green;">
        <h3>
        <div name="add">
            <li>
            <?php echo "<a href='addition.php' target='main'>Addition</a>" ?>
            </f>
            </li>
        </div>

        <div name="minus">
            <li>
            <?php echo "<a href='subtraction.php' target='main'>Subtraction</a>" ?>
            </li>
        </div>

        <div name="multiply">
            <li>
            <?php echo "<a href='multiplication.php' target='main'>Multiplication</a>" ?>
            </li>
        </div>

        <div name="Division">
            <li>
            <?php echo "<a href='division.php' target='main'>Division</a>" ?>
            </li>
        </div>

        <br>

        <div name="Exit">
            <li>
            <?php echo "<a href='galvanExit.php' target='_blank'>Exit</a>" ?>
            </li>
        </div>

        </h3>
    </ul>

</div>  

</body>

</html>