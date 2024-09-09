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
  <title></title>
</head>
<body>


<div class="intro">
            <h1 class="logo-header" >
            <span class="logo">Welcome</span> <span class="logo"><?php echo $login_session; ?>😎</span>
            </h1>
</div>
<?php
echo "<h1 class='header1'>MATHEMATICAL CALCULATOR</h1>";
echo "<h2 class='header2'>By: Kirk Ervin Galvan</h2>"
?>



</body>
</html>


<style>
body {
  background-image: url("bg2.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
}

.header1 {
  color: #2c3e50;
  font-family: Tahoma;
  text-align: center;
  font-size: 80px;
  padding-top: 15%;
  text-shadow: 0px 0px 10px #424949;
  -webkit-text-stroke: 1px whitesmoke;
}

.header2 {
  color: #2c3e50;
  font-family: Verdana;
  text-align: center;
  font-size: 50px;
  text-shadow: 0px 0px 10px #424949;
  -webkit-text-stroke: 1px whitesmoke;
}

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
	background-color: #17202a;
	transition: 1s;
}

.logo-header{
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #D9DCD6;
  font-size: 70px;
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


<script>
    setTimeout(function(){
       window.location='galvanMainPage.php';
    }, 4500);
</script>

