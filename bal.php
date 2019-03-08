<?php
error_reporting (E_ALL ^ E_NOTICE);
 session_start();
$username = $_SESSION['username'];
$dbuser1=$_SESSION['username'];
?>
 
<!DOCTYPE html>
<html>
<?php

  error_reporting(0);
 include 'connect.php';
   
 $month = $_POST['month'];
 if($_POST['submit']){
	
	         $query= "SELECT sum(amount) as amount1 FROM income WHERE MONTH(date)='$month' ";
			 $query= "SELECT sum(amount) as amount2 FROM income WHERE MONTH(date)='$month' ";
             $diff=amount1-amount2;
			 echo $diff;

 }
?>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Balance</title>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
       

    </head>
    <body>

 <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat);

        /*basic reset*/
        * {margin: 0; padding: 0;}

        html {
          height: 100%;
          /*Image only BG fallback*/

          /*background = gradient + image pattern combo*/
          background:
            linear-gradient(rgba(0, 0, 0,1),rgba(151,151,151,1));
        }

        body {
          font-family: montserrat, arial, verdana;
        }
        /*form styles*/
        #msform {
          width: 400px;
          margin: 50px auto;
          text-align: center;
          position: relative;
        }
        #msform fieldset {
          background: white;
          border: 0 none;
          border-radius: 3px;
          box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
          padding: 20px 30px;
          box-sizing: border-box;
          width: 80%;
          margin: 0 10%;

          /*stacking fieldsets above each other*/
          position: relative;
        }
        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
          display: none;
        }
        /*inputs*/
        select ,#msform input, #msform textarea {
          padding: 15px;
          border: 1px solid #ccc;
          border-radius: 3px;
          margin-bottom: 10px;
          width: 100%;
          box-sizing: border-box;
          font-family: montserrat;
          color: #00000;
          font-size: 13px;
        }
        /*buttons*/
        #msform .action-button {
          width: 100px;
          background: #000000;
          font-weight: bold;
          color: white;
          border: 0 none;
          border-radius: 1px;
          cursor: pointer;
          padding: 10px 5px;
          margin: 10px 5px;
        }
        #msform .action-button:hover, #msform .action-button:focus {
          box-shadow: 0 0 0 2px white, 0 0 0 3px #00000;
        }
        /*headings*/
        .fs-title {
          font-size: 15px;
          text-transform: uppercase;
          color: #881c2f;
          margin-bottom: 10px;
        }
        .fs-subtitle {
          font-weight: normal;
          font-size: 13px;
          color: #666;
          margin-bottom: 20px;
        }
        /*progressbar*/
        #progressbar {
          margin-bottom: 30px;
          overflow: hidden;
          /*CSS counters to number the steps*/
          counter-reset: step;
        }
        #progressbar li {
          list-style-type: none;
          color: white;
          text-transform: uppercase;
          font-size: 9px;
          width: 33.33%;
          float: left;
          position: relative;
        }
        #progressbar li:before {
          content: counter(step);
          counter-increment: step;
          width: 20px;
          line-height: 20px;
          display: block;
          font-size: 10px;
          color: #881c2f;
          background: white;
          border-radius: 3px;
          margin: 0 auto 5px auto;
        }
        /*progressbar connectors*/
        #progressbar li:after {
          content: '';
          width: 100%;
          height: 2px;
          background: white;
          position: absolute;
          left: -50%;
          top: 9px;
          z-index: -1; /*put it behind the numbers*/
        }
        #progressbar li:first-child:after {
          /*connector not needed before the first step*/
          content: none;
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before,  #progressbar li.active:after{
          background: #881c2f;
          color: white;
        }



        /* Radio buttons !*/



        .radio-containe {
          position: relative;
        }

        .radio-container input{
          opacity: 0;
          cursor: pointer;
        }

        .radio-container input:checked ~ .custom-check {
          background-color: transparent;
          border: 4px solid #881c2f;
          opacity: 1;

        }




        .custom-check {
          position: absolute;

          border-radius: 50%;
          cursor: pointer;
          width: 50px;
          height: 50px;
          border: none;
          padding: 3px;
          left: 50%;
          top: 60%;
          -webkit-transform: translate(-50%, -50%);
             -moz-transform: translate(-50%, -50%);
               -o-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
        }


        .custom-check img {
          position: absolute;
          color: white;
          width: 20px;
          left: 50%;
          top: 50%;
          -webkit-transform: translate(-50%, -50%);
             -moz-transform: translate(-50%, -50%);
               -o-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
        }


        </style>
        <!-- multistep form -->
<form id="msform" action="" method="POST">
  <fieldset>
    <h2 class="fs-title">Select month </h2>
    
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
    <input type="submit" name="submit" class="next action-button" value="Track Balance" />
  </fieldset>
</form>



        <script src="signjs.js"></script>


    </body>
</html>