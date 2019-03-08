<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-

<style>
body, html {
	height: 100%;
	margin: 0;
	background-color: black;
}
.button {
	position: relative;
	top:-70px;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	float:right;
    cursor: pointer;
	
}
div.big{
	background-image:url("img/gf.gif");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
div.bg{
	float:left;
	width:80%;
}
p.logout{
	margin-left: 1200px;
	font-size: 18px;
}
p.name1{
	margin-right: 1px;
	font-size: 25px;
	color: yellow;

}
div.name2{
	margin-right: 1px;
	
}


div.polaroid {
  width: 30%;
  background-color: DarkBlue;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  color: white;
  padding: 10px 20px;
  
}
img 
{
	display: block;
	margin-left: auto;
	margin-right: auto;
}

h1{
	text-align: left;
	color: indigo;
	font - style: italic;
	font-weight: bold;
    font-family: Helvetica;
    text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
}
a{
	border:solid indigo 1px;
	//color:indigo;
	padding: 8px;
	style-type: none;
	text-decoration: none;
}
</style>
	<title>Home</title>
	
</head>
<body>

<!--<section class="page-heading" id="top">
        <div class="container">
            <div class="row">
               <!-- <div class="col-md-6">
                    <!--<div class="logo">
                        <img src="img/logo.png" alt="Flight Template">
                    </div>
                </div>-->
				

<?php  if (isset($_SESSION['username'])) : ?>
	<p class="name1">Hello&nbsp;<?php echo $_SESSION['username'];?></p>
		<!--<p class="logout"> <a href="index.php?logout='1'" style="color: indigo;">Logout</a> </p>-->
    	
		
    <?php endif ?>	

                <!--<div class="col-md-6">-->
                    <div class="page-direction-button">
					
                        <a href="index.php?logout='1'"><i class="fa fa-home"></i>&nbsp;LogOut</a>
                    </div>
					 <!--</div>-->
            </div>
        </div>
    </section>-->
<a href="http://localhost/registration/table2.php#" class="button">HISTORY</a>
<div class="big">
<div class="bg">



<!--<h1>THE PINNACLE POPULATION TRACKER </h1>-->
<!--<div class="polaroid">
  <img src="images/gr.jpg" alt="Through the graph" style="width:100%">
  </div>
  <div class="container">
    <p>See it throuh graphs!!</p>
  </div>

  <a href="testing.php">
  <img src="images/images.jpg" alt="Through the graph" align="middle" style="width:50%">

  
<a href="newtest.php"><img src="img/cov3.png"</a>-->

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
	
    
</div>
</div>
<!--<div class="side">

<?php  if (isset($_SESSION['username'])) : ?>
	<p class="name1">Hello!!! <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p class="logout"> <a href="index.php?logout='1'" style="color: indigo;">Logout</a> </p>
    	
		
    <?php endif ?>	
</div>-->
</div>	
</body>
</html>
