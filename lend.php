</*?php
session_start();

if (!isset($_SESSION['username'])) {
    
    header("location:login.php");
}
else{
	
?*/>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Income</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="resources/img/favicon.ico" />
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" href="vendor/colorpicker/bootstrap-colorpicker.css">
        <link rel="stylesheet" href="vendor/datepicker/datepicker3.css">
        <link rel="stylesheet" href="vendor/timepicker/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
        <link rel="stylesheet" href="vendor/pickadate/themes/default-date.css">
        <link rel="stylesheet" href="vendor/pickadate/themes/default-time.css">
        <link rel="stylesheet" href="vendor/iCheck/all.css">
        <!-- Icons -->
        <link href="resources/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="resources/icons/themify-icons/themify-icons.css" rel="stylesheet">
        <!--animate css-->
        <link rel="stylesheet" href="vendor/animate.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="resources/css/main-style.min.css">
        <link rel="stylesheet" href="resources/css/skins/all-skins.min.css">

        <link rel="stylesheet" href="resources/css/demo.css">
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112423372-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112423372-2');
</script>

</head>
    <!--
      |---------------------------------------------------------|
      |LAYOUT OPTIONS | fixed                                   |
      |               | layout-boxed                            |
      |               | sidebar-collapse                        |
      |               | sidebar-mini                            |
      |---------------------------------------------------------|
    -->
    <body class="skin-indigo-gradient sidebar-mini">
        <div class="page-loader-wrapper" >
            <div class="spinner"></div>
        </div>
        <div class="wrapper">
            <!-- Main Header -->
            <header class="top-menu-header">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><img src="resources/img/icons/logo-mini.png" class="img-circle" alt="Logo Mini"/></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Voice Based Transport Enquiry system</b></span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a class="sidebar-toggle fa-icon" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-top-menu">
                        
                        <!-- Form Navbar Search -->
                        <div class="collapse top-menu-navbar-search" id="top-menu-navbar-search">
                            <form>
                                <div class="form-group">
                                    <div class="input-search">
                                        <div class="input-group">
                                            <input type="text" id="navbar-search" name="search" class="form-control" placeholder="Search">
                                            <span class="input-group-addon">
                                                <a data-target="#top-menu-navbar-search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /. Form Navar Search -->
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="sidebar-left">
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        
                        
						
						 <li class="treeview"><a href="lend.php"><i class="fa fa-user"></i> <span>Lend</span></a>
                        </li>
						<li class="treeview"><a href="borrow.php"><i class="fa fa-user"></i> <span>Borrow</span></a>
                        </li>
						<li class="treeview"><a href="home.php"><i class="fa fa-power-off"></i> <span>Logout</span></a>
                        </li>
                       
                        
                    </ul>
                    <!-- /. sidebar-menu -->
                </section>
            </aside>
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <section class="content-title">
                    <h1>
                       Lend
                        <small></small>
                    </h1>
                    
                </section>
				<section class="content">
				 <div class="row">
				<div class='col-md-12'>
                            <div class="box box-form">
                                
				
					<div class="box-body">
                                    <div class="col-md-12">
									<form action="lend.php" method="post" enctype="multipart/form-data">
                                        <div class='row'>

											<div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Name</label>
                                                    <input class="form-control" id="username" name="name" type="text" />
													<!--<label>Amount</label>
													<input class="form-control" id="username" name="amount"  type="floatval" />
                                                    <label>Date</label>
													<input class="form-control" id="username" name="date"  type="date" />-->

													
                                                </div>
                                            </div>  
											</div>
											  
                                                    
                                              
											  <div class='row'>
									        <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Amount</label>
                                                    <input class="form-control" id="username" name="amount"  type="floatval" />
                                                </div>
                                            </div>  
                                        </div>
										 <div class='row'>
									        <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Date</label>
													<input class="form-control" id="username" name="date"  type="date" />
                                                </div>
                                            </div>  
                                        </div>
										
                                        <div class='row'>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
													
                                                </div>
                                            </div>
                                        </div>
										<div class='row'>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <button type="submit" name="delete" class="btn btn-primary">Delete</button>
													
                                                </div>
                                            </div>
                                        </div>
									</form>
                                    </div>
                    </div>
							</div>
				</div>
				</div>
				   <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Income</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            
                                            <th>Name</th>
											<th>Amount</th>
											<th>Date</th>
											
											
											
										</tr>
  <?php
include('connect.php');


$query = "select * from lend";

$run = mysqli_query($connect,$query);

while ($row=mysqli_fetch_array($run)) {
    
  
    ?> 
                                        <tr>
                                           
                                            <td><?php echo $row['name']; ?></td>
											<td><?php echo $row['amount']; ?></td> 
											<td><?php echo $row['date']; ?></td>  
											
											
											
                                      
									  </tr>
										<?php
}?>
                                    </table>
                                </div>
                            </div>                          
                        </div>
				</section>

				
                
                <!-- /. main content -->
                <span class="return-up"><i class="fa fa-chevron-up"></i></span>
				<div class="clearfix"></div>
            </div>
			
            <!-- /. content-wrapper -->
            <!-- Main Footer -->
            
        </div>
        
<!-- /. wrapper content-->
        <!-- JS scripts -->
        <script src="vendor/jQuery/jquery-2.2.3.min.js"></script>
        <script src="vendor/jquery-fullscreen/jquery.fullscreen-min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="vendor/fastclick/fastclick.min.js"></script>
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/colorpicker/bootstrap-colorpicker.js"></script>
        <script src="vendor/input-mask/jquery.inputmask.js"></script>
        <script src="vendor/input-mask/jquery.inputmask.extensions.js"></script>
        <script src="vendor/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="vendor/datepicker/bootstrap-datepicker.js"></script>
        <script src="vendor/timepicker/bootstrap-timepicker.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <script src="vendor/pickadate/picker.js"></script>
        <script src="vendor/pickadate/picker-date.js"></script>
        <script src="vendor/pickadate/picker-time.js"></script>
        <script src="vendor/iCheck/icheck.min.js"></script>
        <script src="resources/js/pages/advance-elements.js"></script>
        <script src="resources/js/app.min.js"></script>

        <script src="resources/js/demo.js"></script>
        <!-- Slimscroll is required when using the fixed layout. -->
    </body>
	
	<?php
include('connect.php');




if (isset($_POST['submit'])) {


	$name=$_POST['name'];
	
	$amount=$_POST['amount'];
	$date=$_POST['date'];
	

 $insert_query = "insert into lend ( name,amount,date) values ('$name','$amount','$date')";

     
      if (mysqli_query($connect,$insert_query)) {
		  
		  
		  
		  
        echo "<script>alert('Submitted Successfull!')</script>";
      echo "<script>window.open('lend.php','_self')</script>";


} else {
    echo "Error: " . $insert_query . "<br>" . mysqli_error($connect);
}
                  
              }
			   if (isset($_POST['delete'])) {


	$name=$_POST['name'];
	
	$amount=$_POST['amount'];
	$date=$_POST['date'];
	

 $delete_query = "delete from lend where name='$name' and amount='$amount' and date='$date' ";

 
      
            if (mysqli_query($connect,$delete_query)) {
		  
		  
		  
		  
        echo "<script>alert('Deleted Successfull!')</script>";
      echo "<script>window.open('lend.php','_self')</script>";


} else {
    echo "Error: " . $delete_query . "<br>" . mysqli_error($connect);
}      
              }
    




?>
</html>
    


