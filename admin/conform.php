		
<?php
		
				$con=mysqli_connect("localhost","root","","busbook1") or die(mysql_error());
            
				
				
				$sql ="Select * from passenger_info ";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
                    $pass_id = $row['pass_id'];
					$name = $row['name'];
					$email = $row['email'];
					$age = $row['age'];
					$phone = $row['phone'];
                    $gender = $row['gender'];
				}
             $sql1 ="Select * from businfo ";
				$re1 = mysqli_query($con,$sql1);
				while($row=mysqli_fetch_array($re1))
				{
					
					$boarding = $row['boarding'];
					$droping = $row['droping'];
                    $date = $row['date'];
				}
            
				
           
		
	
	?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MS TRAVELS	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        
         <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                 
                   
                    
                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> LOGOUT</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            BOOKING CONFORMED
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           TICKET DETAILS
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Passenger Name</th>
                                            <th><?php echo $name; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>age </th>
                                            <th><?php echo $age; ?></th>
                                            
                                        </tr>
                                    <tr>
                                            <th>Gender </th>
                                            <th><?php echo $gender; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Phone No </th>
                                            <th><?php echo $phone; ?></th>
                                            
                                        </tr>
										
										
										<tr>
                                            <th>Boarding Point </th>
                                            <th><?php echo $boarding; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Droping Point </th>
                                            <th><?php echo $droping; ?></th>
                                            
                                        </tr>
										
										<tr>
                                            <th>date </th>
                                            <th><?php echo $date; ?></th>
                                            
                                        </tr>
										
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        
							
                    
							</form>
                        </div>
                    </div>
					</div>
					
					
				
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
