<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Mathematical Calculator</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   
<div class="welcome">
<?php
echo "<h1>This is a Mathematical Calculator</h1>";
echo "<h2>Kindly register to explore this application</h2>";
echo "<h4>Click the 'Sign-up' or 'Login' button below to proceed</h4>";
?>
</div>

<!--Login Form-->

<div class="center">
  <input type="checkbox" id="show">
  <label for="show" class="show-btn" onclick="toggleLogin()">Login</label>
  <label class="show-btn2"><a href="galvanRegistration.php">Sign-Up</a></label>

<div class="overlay">
  <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>

            <form action="#" method="post">
               
            <div class="data">
                  <label>First Name:</label>
                  <input type="text" name="KFname" >
            </div>
               
            <div class="data">
                  <label>Password:</label>
                  <input type="Password" name="Pass1">
            </div>
               
            <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">login</button>
            </div>
               
            <div class="signup-link">
                  Not yet registerd? <a href="galvanRegistration.php">Sign-up now</a>
            </div>
            </form>
         

         <?php
   include("database.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
  
      $Fname = mysqli_real_escape_string($db,$_POST['KFname']);
      $Password = mysqli_real_escape_string($db,$_POST['Pass1']); 

      $sql = "SELECT * FROM users WHERE firstname = '$Fname' and pass = '$Password'";

      $result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);

      if($count == 1) {
	  
         $_SESSION['login_user'] = $Fname;
         header("location: welcome.php");
      } else {
        if (empty($_POST['KFname']) && empty($_POST['Pass1'])) {
            echo "<div class='error'>Please Fill Username and Password</div>";
            
        } elseif (empty($_POST['Pass1'])) {
            echo "<div class='error'>Please Fill Password</div>";
        
        } elseif (empty($_POST['KFname'])) {
            echo "<div class='error'>Please Fill Username</div>";
            
        } else {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $Fname = $row['KFname'];
                $Password = $row['Pass1'];
    
                if ($Fname == $Fname && $Password == $Password) {
                    $_SESSION['KFname'] = $Fname;
                    $_SESSION['Pass1'] = $Password;
                }
            } else {
                echo "<div class='error'>Invalid Username or Password</div>";
                
            }
        }
      }
    }
?>

</div>

<!--JS Script-->
<script>
<script>
  function toggleLogin() {
    document.querySelector(".overlay").classList.toggle("open");
  }
</script>
</script>

<style>

.overlay .error {
    background-color: pink;
    border-radius: 5px;
    border-color: LightCoral;
    font-family: 'Poppins', sans-serif;
    color: IndianRed;
    width: 350px;
    padding: 5px;
    margin-top: -290px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0px 0px 5px red;
    
}

*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  height: 100vh;
  width: 100%;
  background-image: url("777.jpg");
  background-repeat: ;
  background-size: 110%;
  
}

.welcome {
  display: block;
  text-align: center;
  padding: 13%;
  text-shadow: 0px 0px 10px rgba(0,0,0,0.3);
}
.show-btn{
  background: #fff;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 500;
  color: #3498db;
  cursor: pointer;
  width: 300px;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0px 0px 10px #3498db;
  margin-top: 15px;
}

.show-btn2{
  background: #fff;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 500;
  color: #3498db;
  cursor: pointer;
  width: 300px;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0px 0px 10px #3498db;
  position: absolute;
  border-radius: 20px;
  top: 44%;
  left: 50%;
  width: 300px;
  text-align: center;
  transform: translate(-50%, -50%);
  margin-top: 20px;
  
}
.show-btn, .overlay{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

input[type="checkbox"]{
  display: none;
}
.overlay{
  display: none ;
  background: lightgrey;
  border-radius: 15px;
  width: 1100px;
  height: 400px;
  margin-top: -90px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,5);
}
#show:checked ~ .overlay{
  display: block;
  animation: show-overlay 1s;
}
.overlay .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
}
.overlay .close-btn:hover{
  color: #3498db;
}
.overlay .text{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
}
.overlay form{
  margin-top: -20px;
}
.overlay form .data{
  height: 45px;
  width: 100%;
  margin: 40px 0;
}

.overlay.open {
  display: flex;
}

@keyframes show-overlay {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

form .data label{
  font-size: 18px;
}
form .data input{
  height: 100%;
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  border: 1px solid silver;
}
form .data input:focus{
  border-color: #3498db;
  border-bottom-width: 2px;
}
form .btn{
  margin: 30px 0;
  height: 45px;
  width: 100%;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}
form .btn .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  z-index: -1;
  background: -webkit-linear-gradient(right, #40E0D0, #2874a6, #40E0D0, #2874a6); 
  transition: all 1s;
  
}
form .btn:hover .inner{
  left: 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  background: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
}
form .signup-link{
  text-align: center;
}
form .signup-link a{
  color: #3498db;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}

h1 {
  font-size: 50px;
  margin-bottom: 10px;
}

h2 {
  font-size: 30px;
  margin-bottom: 10px;
  color: #3498db;
}

h4 {
  color: #707b7c;
}
</style>
</body>
</html>