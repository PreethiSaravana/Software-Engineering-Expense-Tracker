<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
<style>
body {
    font-size: 120%;
    height: 100%;
    margin: 0;
    background-image:url("images/background.jpg");
	background-size: cover;
}
div.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background-color: black;
  text-align: center;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  background-color:black;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
  color: HotPink;
}
.test{
	color: white;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background-color: DeepPink;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}


</style>
</head>
<body>
<div class="main">
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="http://localhost/software/home2.php#">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
		<br></br>
  		<label>Password</label>
  		<input type="password" name="password">
		<br></br>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="test">
  		Not yet a member? <a href="register.php">Sign up</a>
	
  	</p>
  </form>
  </div>
</body>
</html>