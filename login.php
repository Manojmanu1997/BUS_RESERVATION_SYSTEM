
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>MS TRAVELS</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
  <div class="header">
  	<h2>User Login</h2>
  </div>
   
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"> Login</button>
  	</div>
  	<p>
  		Not yet a member?  <button type="submit" class="btn"><a href="Register.php">Sign up</a></button>
  	</p>
      <div class="input-group">
  		<button type="submit" class="btn" name="login_user"><a href="index.php">Back</a></button>
  	</div>
</form>
</body>
</html>
 <?php
				$con1=mysqli_connect("localhost","root","","busbook1");				
                $tsql = "delete from businfo";
									$tre = mysqli_query($con1,$tsql);
            ?>



