<?php
error_reporting (E_ALL ^ E_NOTICE);
 session_start();
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #000000;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
body {
  margin: 0;
}


h1 {
    color: white;
}
</style>
</head>
<body>

<div class="header">
  <h1>EXPENSE TRACKER</h1>
</div>
<div class="topnav">
  <a href='http://localhost/software/income.php'>Schedule Income</a>
  <a href='./expense.php'>Track Expense</a>
   <a href='./try.php'>Track Balance</a>
   <a href='./lend.php'>Transaction Management</a>
   <a href='./Loginuser.php'>Graphs and Charts</a>
    <a href='./home.php'>Logout</a> 
  
</div>
<img src="background.jpg" alt="Expense" width="1500" height="700">
<style>
</body>
</html>
