<?php
$con = mysqli_connect("localhost","root","","busbook1") or die(mysql_error());
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MS TRAVELS</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           PASSANGER DETAILS <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PASSANGER DETAILS
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
							  <div class="form-group">
                                            <label>Name</label>
                                            <input name="name" class="form-control" required>
                                            
                               </div>
						<div class="form-group">
                                            <label>Gender</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender"  value="male" checked="">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender"  value="female " checked="">Female
                                            </label>
                         
                                </div>
							   <div class="form-group">
                                            <label>Age</label>
                                            <input name="age" class="form-control" required>
                                            
                               </div>
                             <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Phone No</label>
                                            <input name="phone" class="form-control">
                                            
                               </div>
                            
						<input type="submit" name="submit" class="btn btn-primary">
                         
							</div>  
                       </div>
                        
                    </div>
                </div>
                
                  
           
				
               
              
						
                        
                            
                        
                        <?php
							
							if(isset($_POST['submit'])) 
							{
							
									$con=mysqli_connect("localhost","root","","busbook1");
									$check="SELECT * FROM passenger_info WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `passenger_info`(`name`, `gender`, `age`, `email`, `phone`) VALUES ('$_POST[name]','$_POST[gender]','$_POST[age]','$_POST[email]','$_POST[phone]')";
										if (mysqli_query($con,$newUser))
										{
											 header('location: payment1.php');
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding details in database')</script>";
											
										}
									}

							
							
							}
							?>
                
                
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
    </div>
</body>
</html>
