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
    <a href="#login-box" class="login-window">Login / Sign In</a>
    <div id="login-box" class="login-popup">
      <a href="#" class="close"><img src="<?php echo base_url('static/images/close_pop.png'); ?>" class="btn_close" title="Close Window" alt="Close" /></a>
      <form method="post" class="signin" action="#">
        <fieldset class="textbox">
          <label class="username">
            <span>Username or email</span>
            <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
          </label>
          <label class="password">
            <span>Password</span>
            <input id="password" name="password" value="" type="password" placeholder="Password">
          </label>
          <button class="submit button" type="button">Sign in</button>
          <p>
            <a class="forgot" href="#">Forgot your password?</a>
          </p>
        </fieldset>
      </form>
    </div>
  </body>
</html>