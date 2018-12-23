<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "busbook1";
$id = "";
$busno = "";
                $boarding = "";
                $droping = "";
                $boardtime = "";
                $droptime = "";
                $nseats = "";
                $fair = "";
                $fname = "";
                $lname = "";
                $email = "";
                $address1 = "";
                $address2 = "";
                $phone = "";
                $dlicense = "";

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
    $posts[1] = $_POST['busno'];
    $posts[2] = $_POST['boarding'];
    $posts[3] = $_POST['droping'];
    $posts[4] = $_POST['boardtime'];
    $posts[5] = $_POST['droptime'];
    $posts[6] = $_POST['nseats'];
    $posts[7] = $_POST['fair'];
    $posts[8] = $_POST['fname'];
    $posts[9] = $_POST['lname'];
    $posts[10] = $_POST['email'];
    $posts[11] = $_POST['address1'];
    $posts[12] = $_POST['address2'];
    $posts[13] = $_POST['phone'];
    $posts[14] = $_POST['dlicense'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM admin_entry WHERE busno = '$data[1]'";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
               
                $busno = $row['busno'];
                $boarding = $row['boarding'];
                $droping = $row['droping'];
                $boardtime = $row['boardtime'];
                $droptime = $row['droptime'];
                $nseats = $row['nseats'];
                $fair = $row['fair'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $email = $row['email'];
                $address1 = $row['address1'];
                $address2 = $row['address2'];
                $phone = $row['phone'];
                $dlicense = $row['dlicense'];
            }
        }else{
            echo 'No Data For This busno';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query ="INSERT INTO `admin_entry`(`busno`, `boarding`, `droping`, `boardtime`, `droptime`, `nseats`, `fair`, `fname`, `lname`, `email`, `address1`, `address2`, `phone`, `dlicense`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Bus details Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `admin_entry` WHERE `busno` = '$data[1]'";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'bus and driver details are Deleted';
            }else
            {
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex)
    {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `admin_entry` SET 
     `boarding`='$data[2]', `droping`='$data[3]', `boardtime`='$data[4]', `droptime`='$data[5]', `nseats`='$data[6]', `fair`='$data[7]', `fname`='$data[8]', `lname`='$data[9]', `email`='$data[10]', `address1`='$data[11]', `address2`='$data[12]', `phone`='$data[13]', `dlicense`='$data[14]'  WHERE `busno` = '$data[1]'";
    
    
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



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
                        <a  href="adminbusroute.php"><i class="fa fa-home"></i> Add Buses</a>
                         <a  href="userdetails.php"><i class="fa fa-home"></i> User Details</a>
                          <a  href="adminfindbus.php"><i class="fa fa-home"></i> ALL Buses</a>

                    </li>
                    
                   


                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            DETAILS <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            BUS DETAILS
                        </div>
                         <div class="panel-body">
						<form name="form" method="post">
							  <div class="form-group">
                                            <label>Bus No</label>
                                            <input type="text" name="busno" class="form-control" value="<?php echo $busno;?>">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Boarding Point</label>
                                            <input type="text" name="boarding" class="form-control" value="<?php echo $boarding;?>">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Droping Point</label>
                                            <input type="text" name="droping" class="form-control"  value="<?php echo $droping;?>">
                                            
                               </div>
                             <div class="form-group">
                                            <label>Boarding Time</label>
                                            <input name="boardtime" type ="time" class="form-control"  value="<?php echo $boardtime;?>">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Droping Time</label>
                                            <input name="droptime" type ="time" class="form-control"  value="<?php echo $droptime;?>">
                                            
                               </div>
                             <div class="form-group">
                                            <label>No.of Seats</label>
                                            <input type="number" name="nseats" class="form-control"   value="<?php echo $nseats;?>">
                                            
                            </div>
                            <div class="form-group">
                                            <label>Ticket Fair</label>
                                            <input type="number" name="fair" class="form-control"   value="<?php echo $fair;?>">
                                            
                               </div>
							   
                        
                            </div> </div> 
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            DRIVER DETAILS
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                   
                                     <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="fname" class="form-control"   value="<?php echo $fname;?>">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" class="form-control"   value="<?php echo $lname;?>">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control"   value="<?php echo $email;?>">
                                            
                               </div>
                                     <div class="form-group">
                                            <label>Address Line1 </label>
                                            <input type="text" name="address1"  class="form-control"   value="<?php echo $address1;?>">
                                                </div>
							  <div class="form-group">
                                            <label>Address Line2</label>
                                   <input type="text" name="address2"  class="form-control"   value="<?php echo $address2;?>">
                              </div>
							  
                            <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="number" class="form-control"   value="<?php echo $phone;?>">
                                            
                               </div>
                                    <div class="form-group">
                                            <label>Driving License</label>
                                            <input name="dlicense" type ="text" class="form-control"   value="<?php echo $dlicense;?>">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
                </div>
                    </div>
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        
                        
                  
                        
                        
						<input input type="submit" name="insert" value="Add" class="btn btn-primary">
                        <input input type="submit" name="update" value="update" class="btn btn-primary">
                        <input input type="submit" name="delete" value="delete" class="btn btn-primary">
                        <input input type="submit" name="search" value="Find" class="btn btn-primary">
						
                        
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


						
							
            