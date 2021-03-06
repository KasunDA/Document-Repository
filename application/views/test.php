<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('static/css/styletest.css'); ?>" />
  </head>
  <body>
    <script src="<?php echo base_url('static/js/custom.js'); ?>"></script>
      <?php $attributes = array("class" => "login", "id" => "loginform", "name" => "loginform");
      echo form_open("auth/login", $attributes);?>
      <fieldset>
        
        <legend class="legend">Login</legend>
        
        <div class="input">
          <input type="text" name="txt_username" placeholder="Username" required />
          <span><i class="fa fa-envelope-o"></i></span>
        </div>
        
        <div class="input">
          <input type="password" placeholder="Password" name="txt_password" required />
          <span><i class="fa fa-lock"></i></span>
        </div>
        
        <button  id="btn_login" name="btn_login"  type="submit" class="submit" value = "Login"><i class="fa fa-long-arrow-right"></i></button>
        
      </fieldset>
      
      <div class="feedback">
        login successful <br />
        redirecting...
      </div>
      <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>
    </body>
  </html>