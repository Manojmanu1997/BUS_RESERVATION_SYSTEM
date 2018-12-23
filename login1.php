<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>MS TRAVELS</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	 
  <form method="post" action="login1.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Admin</label>
  		<input type="text" name="admin" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_admin">Login</button>
        </div>
       
 
     <div class="input-group">
        <button type="submit" class="btn" name="login_admin"><a href="index.php">Back</a></button>
  	</div>
       </form>
</body>
</html>