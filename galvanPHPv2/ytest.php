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
<div class="intro">
            <h1 class="logo-header" >
            <span class="logo">Welcome</span> <span class="logo"><?php echo $login_session; ?></h1> </span>
            </h1>
      </div>


      <?php
echo "<h1>Welcome to my Mathematical Calculator</h1>";
echo "<h2>Please click any Mathematical calculation on the side navigation</h2>";
echo "<h4>Just explore and enjoy every minute of this training</h4>";
?>

<frameset rows="150px,*">
    <frame src="galvanHeader.php"; noresize="noresize">
      
<frameset cols="12%,*">
    <frame src="galvanNavigation.php"; noresize="noresize">
    <frame src ="galvanWelcome.php"; name="main"; noresize="noresize">
</frameset>

</html>
<style>
  *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Century Gothic;
}

header{
	position: relative;
	left: 0;
	top: 0;
	width: 100%;
	height: 80px;
}

header h4{
	position: absolute;
	left: 10%;
	bottom: 1rem;
	font-size: 1.6rem;
}

/* Splash Screen */

.intro{
	position: fixed;
	z-index: 1;
	left: 0%;
	top: 0%;
	width: 100%;
	height: 100vh;
	background-color: #2B2D42;
	transition: 1s;
}

.logo-header{
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #D9DCD6;
}

.logo{
	position: relative;
	display: inline-block;
	bottom: -20px;
	opacity: 0;
}

.logo.active{
	bottom: 0;
	opacity: 1;
	transition: ease-in-out 0.5s;
}

.logo.fade{
	bottom: 0;
	opacity: 0;
	transition: ease-in-out 0.5s;
}
</style>
<script>
let intro = document.querySelector('.intro')
    let logo = document.querySelector('.logo-header')
    let logoSpan = document.querySelectorAll('.logo')
    window.addEventListener('DOMContentLoaded',()=>{
      setTimeout(()=>{
        logoSpan.forEach((span,idx) => {
          setTimeout(()=>{
            span.classList.add('active')
        }, (idx+1)*400);
      });

      setTimeout(()=>{
        logoSpan.forEach((span,idx)=>{
          setTimeout(()=>{
            span.classList.remove('active');
            span.classList.add('fade');
          }, (idx+1)*50)
        })
      },2000);
      setTimeout(() => {
        intro.style.top= '-100vh'
      },2300);
    })
  })
  </script>