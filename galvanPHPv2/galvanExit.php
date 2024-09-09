<?php
   // Start the session
   session_start();

   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
      die();
   }
   $login_session = $_SESSION['login_user'];
?>

<html>
<head>
    
<title>Mathematical Calculator</title>

<style>

body {
  background-image: url("bg10.jpeg");
  background-repeat: no-repeat;
  background-size: 100%;
  text-align: center;
  padding-top: 300px;
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
  width: 350px;
  height: 65px; 
  background-color: #5dade2;
  border-radius: 15px;
  font-size: 20px;
  font-family: Century Gothic; 
  color: #fff;
  text-shadow: 0px 0px 10px black; 
  position: relative;
  top: 50px;
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
  text-shadow: 0px 0px 10px black; 
  position: relative;
  top: 50px;
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

.header1 {
  color: #fff;
  font-family: Century Gothic;
  text-align: center;
  font-size: 120px;
}

.header2 {
  color: #fff;
  font-family: Verdana;
  text-align: center;
  font-size: 50px;
  position: relative;
  top: 10px;
}

.header3 {
  color: #fff;
  font-family: Verdana;
  text-align: center;
  font-size: 20px;
  position: relative;
  top: 20px;
}

</style>

<body style="background-color: goldenrod">


<?php
echo "<div class='header1'>Thank You $login_session 😉 </div>";
echo "<div class='header2'>Don't hesitate to come back</div>";
echo "<div class='header3'>and try to explore and enjoy every minutes of this training.</div>";
?>
    
<button class="btn-1">
    <?php echo "<a href='galvanMainPage.php'>BACK TO MAIN PAGE</a>"; ?>
    
</button> 

<button class="btn-2">
    <?php echo "<a href='galvanIndex.php'>LOGOUT</a>"; ?>
</button>
    
</body>  
</head>    
</html>