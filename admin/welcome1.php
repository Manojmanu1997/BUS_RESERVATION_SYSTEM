<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "busbook1";

                $boarding = "";
                $droping = "";
                $date = "";
               

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['boarding'];
    $posts[1] = $_POST['droping'];
    $posts[2] = $_POST['date'];
   return $posts;
}



if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query ="INSERT INTO `buses`(`boarding`, `droping`, `date`) VALUES ('$data[0]','$data[1]','$data[2]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                header('location: busfind.php');
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

?>
   <?php
				$con1=mysqli_connect("localhost","root","","busbook1");				
                $tsql = "delete from passenger_info";
									$tre = mysqli_query($con1,$tsql);
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
                            BUS SEARCH <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ENTER BUS DETAILS
                        </div>
                         <div class="panel-body">
						<form name="form" method="post">
							  <div class="form-group">
                                            <label>boarding</label>
                                            <input type="text" name="boarding" class="form-control" required>
                                            
                               </div>
							  
							   <div class="form-group">
                                            <label>Droping Point</label>
                                            <input type="text" name="droping" class="form-control" required  value="<?php echo $droping;?>">
                                            
                               </div>
     <div class="form-group">
                                            <label>date</label>
                                            <input type="date" name="date" class="form-control" required value="<?php echo $date;?>">
                                            
                               </div>
                            
                        
                            </div> </div> 
                </div>
                
                  
           
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        
                        
                  
                        
                        
						<input input type="submit" name="insert" value="search" class="btn btn-primary">
            
			
                        
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




















       