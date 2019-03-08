<!DOCTYPE html>
<html>
<title>Moscow</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
h3.que{
	cursor:pointer;
}

.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0
#demo,#demo1,#demo2,#demo3,#demo4,#demo5,#demo6,#demo9{
	font-size:20px;
	font-weight:bold;
}

</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="img/moscow5.jpg" style="width:100%">
  <a href="http://localhost/registration/chumma.php#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>FACTS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="http://localhost/registration/chumma.php#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">FACTS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
 <?php
include('connect.php');

$query = "SELECT amount FROM income WHERE MONTH(date)='$month';";
$runn = mysqli_query($connect,$query);
/*$query1 = "SELECT city_code from city where country_code=7;";
$run1 = mysqli_query($connect,$query1);
$query2 = "SELECT male from city where country_code=7;";
$run2 = mysqli_query($connect,$query2);
$query2 = "SELECT male from city where country_code=7;";
$run2 = mysqli_query($connect,$query2);
$query4 = "select rank from gdp where country_code=7;";
$run4 = mysqli_query($connect,$query4);
$query3 = "select female from city where country_code=7;";
$run3 = mysqli_query($connect,$query3);*/

//$runn = mysqli_query($connect,$query);
/*$query1="SELECT population from futureworld where year=2050";
$runn = mysqli_query($connect,$query);
$run1 = mysqli_query($connect,$query1);
$query2="SELECT c.country_name from country_pop cp, country c where cp.pop=(select max(pop) from country_pop) and cp.country_code=c.country_code;";
$run2 = mysqli_query($connect,$query2);
$query3="SELECT c.country_name from pop_religion cp, country c where cp.population=(select max(population) from pop_religion where religion='christian') and cp.country_code=c.country_code;";
$run3 = mysqli_query($connect,$query3);
$query4="SELECT c.country_name from gdp cp, country c where cp.gdp_billion=(select max(gdp_billion) from gdp) and cp.country_code=c.country_code;";
$run4 = mysqli_query($connect,$query4);
$query5="SELECT c.country_name from age cp, country c where cp.senior_citizens=(select max(senior_citizens) from age) and cp.country_code=c.country_code;";
$run5 = mysqli_query($connect,$query5);
$query6="call test9();";
$run6 = mysqli_query($connect,$query6);
$query7="SELECT country_name from country where country_code=1;";
$run7 = mysqli_query($connect,$query7);
$query8="SELECT country_name from country where country_code=1;";
$run8 = mysqli_query($connect,$query8);*/




?>
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Moscow  </span></h1>
    <p>Capital of Russia</p>
    <img src="img/firstimg.jpg" alt="paris" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Capital of Russia</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Moscow is a major political, economic, cultural, and scientific centre of Russia and Eastern Europe, as well as the largest city (both by population and by area) entirely on the European continent. By broader definitions Moscow is among the world's largest cities, being the 14th largest metro area, the 18th largest agglomeration, the 14th largest urban area, and the 11th largest by population within city limits worldwide.Moscow, Russia (GDP: $520.1 billion) Regarding Russia's economy, the country boasts off their high-income mixed economy with state ownership. 
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">THE MOST VISITED PLACES OF MOSCOW</h3>
    <p class="w3-wide">MOSCOW KREMLIN</p>
    <div class="w3-white">
      <div class="w3-orange" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">BOLSHOI THEATRE</p>
    <div class="w3-white">
      <div class="w3-pink" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">SAINT BASIL'S CATHEDRAL</p>
    <div class="w3-white">
      <div class="w3-blue" style="height:28px;width:80%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-black">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1</span><br>
        River MOSKVA
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1809</span><br>
        MUSEUMS
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">197+</span><br>
        CHURCHES
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">15+</span><br>
        MONUMENTS
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-pink">ATTRACTIONS</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-pink w3-xlarge w3-padding-32">Historic and Architectural Marvels</li>
          <li class="w3-padding-16">RED SQUARE</li>
          <li class="w3-padding-16">SAINT BASIL'S CATHEDRAL</li>
          <li class="w3-padding-16">BOLSHOI THEATRE</li>
          <li class="w3-padding-16">TRETYAKOV GALLERY</li>
          <li class="w3-padding-16">
            <h2>MOSCOW KREMLIN</h2>
            <span class="w3-opacity">Moscow</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-pink w3-xlarge w3-padding-32">FAMOUS DISHES OF PARIS</li>
          <li class="w3-padding-16">Pelmeni </li>
          <li class="w3-padding-16">Blini</li>
          <li class="w3-padding-16">Pierogi</li>
          <li class="w3-padding-16">Pilaf</li>
          <li class="w3-padding-16">
            <h2>Olivier salad !!</h2>
            <span class="w3-opacity">Just Taste It!</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    <!-- End Grid -->
    </div>
    
    
    <h3 class="w3-padding-24 w3-text-light-grey">DELICACIES</h3>  
    <img src="img/redfood.jpg" alt="choco" class="w3-left w3-circle w3-margin-right" style="width:180px">
    <p><span class="w3-large w3-margin-right">Borscht</span></p>
    <p>A tasty treat.</p><br>
    
    <img src="img/nextfood.jpg" alt="french" class="w3-left w3-circle w3-margin-right" style="width:180px">
    <p><span class="w3-large w3-margin-right">Golubtsy </span></p>
    <p>Nothing is better than this.</p>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Moscow at a glance</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="img/moscow3.jpg" style="width:80%">
		<h3 class="que" onclick='document.getElementById("demo").innerHTML = "<?php while ($row1=mysqli_fetch_array($runn)){
																														echo $row1['population'];
												}?>"'>The Population of Moscow </h3>
	<p id="demo"></p>
        <h3 class="fs-title">Select month </h3>
    
    <select name="month"><br>
                <option value="01">jan</option>
                <option value="02">feb</option>
                <option value="03">mar</option>
                <option value="04">apr</option>
                <option value="05">may</option>
				<option value="06">jun</option>
                <option value="07">jul</option>
                <option value="08">aug</option>
                <option value="09">sept</option>
                <option value="10">oct</option>
				<option value="11">nov</option>
                <option value="12">dec</option>
				</select><br>
    

		<h3 class="que" onclick='document.getElementById("demo1").innerHTML = "<?php while ($row1=mysqli_fetch_array($runn)){
																														echo $row1[amount];
												}?>"'>Track</h3>
	<p id="demo1"></p>
       <!-- <img src="img/moscow.jpg" style="width:80%">
		<h3 class="que" onclick='document.getElementById("demo5").innerHTML = "</*?php while ($row5=mysqli_fetch_array($run4)){
																														echo $row5['rank'];
												}?>"'>The rank of Moscow in GDP</h3>
	<p id="demo5"></p>
      </div>

      <div class="w3-half">
        <img src="img/chruch.jpg" style="width:100%">
		<h3 class="que" onclick='document.getElementById("demo2").innerHTML = "</*?php while ($row3=mysqli_fetch_array($run2)){
																														echo $row3['male'];
												}?>"'>The No of Males in Moscow </h3>
	<p id="demo2"></p>
        <img src="img/just.jpg" style="width:70%">
		<h3 class="que" onclick='document.getElementById("demo3").innerHTML = "</*?php while ($row4=mysqli_fetch_array($run3)){
																														echo $row4['female'];
												}?>"'>The No of Females in Moscow </h3>
												<p id="demo3"></p>
        <img src="img/theatre.jpg" style="width:50%">
		<h3 class="que" onclick='document.getElementById("demo4").innerHTML = "Louvre Museum";
												'>Bolshoi Theatre </h3>
												<p id="demo4"></p>

        <img src="/w3images/p6.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    <!--</div>-->
  <!-- End Portfolio Section -->
  <!--</div>-->

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Emergency Contact</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Fire: 18</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Police:17</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> SAMU(Ambulance): 15</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Service provided by <a href="http://localhost/registration/index.html" target="_blank" class="w3-hover-text-green">POPULATION MONITORING SERVICES</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
