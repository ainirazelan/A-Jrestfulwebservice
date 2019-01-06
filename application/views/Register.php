<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
 <title>A&J Registration Page</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<head>
	<meta charset="utf-8">
	<title>A&J Boutique</title>
    
	<style type="text/css">

	::selection { background-color: #E13300; color: white; } }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: Violet;
		margin: 40px;
		font: 20px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
    }
    h3 {
		color: White;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 24px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	
    </style>
</head>

<body>
 <div class="container">
  <br />
  <h3 align="center"><b>Welcome To A&J Boutique </b></h3>
  <br />
  <div id="body">
		<p>Our boutique provide the best quality product from various well-known fashion designer 
		all over the world with the international touch in every creation.</p>
  </div>
  <div class="panel panel-default">
   <div class="panel-heading">Register</div>
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?> register/validation">
     <div class="form-group">
      <label>Username</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Email Address</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info"; />
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>
