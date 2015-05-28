<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('static/css/stylesheet.css'); ?>" />
        <link href="<?php echo base_url('static/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('static/css/styletest.css'); ?>" />
    </head>
    <body>
        <!-- jQuery -->
        <script src="<?php echo base_url('static/js/jquery.js'); ?>"></script>
        <!-- Bootstrap JavaScript -->
        <script src="<?php echo base_url('static/js/bootstrap.min.js'); ?>"></script>
        <!--Custom JS -->
        <script src="<?php echo base_url('static/js/custom.js'); ?>"></script>

     <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="<?php echo base_url('static/images/close_pop.png'); ?>" class="btn_close" title="Close Window" alt="Close" /></a>
<!--           <form method="post" class="signin" action="#">
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
          </form> -->
        <div class = "container" id = "login_box">
            <?php
               $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
               echo form_open("auth/login", $attributes);?>
               <fieldset>
                    <legend>Login</legend>
                    <div class="form-group">
                         <div class="row colbox">
                              <div class="col-lg-4 col-sm-4">
                                   <label for="txt_username" id ="usr_label" class="control-label">Username</label>
                              </div>
                              <div class="col-lg-8 col-sm-8">
                                   <input class="form-control usr_txt" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                                   <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                              </div>
                         </div>
                    </div>
                    
                    <div class="form-group">
                         <div class="row colbox">
                              <div class="col-lg-4 col-sm-4">
                                   <label for="txt_password" class="control-label">Password</label>
                              </div>
                              <div class="col-lg-8 col-sm-8">
                                   <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                                   <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                              </div>
                         </div>
                    </div>
                    
                    <div class="form-group">
                         <div class="col-lg-12 col-sm-12 text-center">
                              <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                              <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                         </div>
                    </div>
               </fieldset>
               <?php echo form_close(); ?>
               <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>

        <div class="container" id = "webheader">

        <nav class="navbar navbar-default navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>">BOOK REPOSITORY</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url();?>">HOME</a></li>
                        <li><a href="news.html">NEWS</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li>                        
                            <div id = "search">
                                <form action="index.php/site/search" method="GET" role="form" class="navbar-form">
                                    <div class="input-group">
                                        <input type="text" name = "keyword" class="form-control" id="keyword" placeholder="Search a document..."/>
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </li>                  
                            <?php 
                                $user = $this->session->userdata('username');
                                if ($user!=''){
                                    echo "<li class = 'dropdown'>
                                            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$user."
                                            <span class='caret'></span></a>
                                            <ul class='dropdown-menu'>
                                                <li><a href='#'>My Account</a></li>
                                                <li><a href='". base_url('index.php/auth/logout') ."'>Logout</a></li>
                                            </ul>
                                         </li>";
                                }
                                else{
                                    echo "<li><a href='".base_url('index.php/auth/signup')."'><b><span class='glyphicon glyphicon-user'></span> Sign Up</b></a></li>";
                                    echo "<li><a href='#login-box' class='login-window'><b><span class='glyphicon glyphicon-log-in' id = 'login_link'></span> Login</b></a></li>";
                                }
                            ?>
                        </a></li>
                    </ul>
                </div>
                
            </div>
        </nav>

        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo base_url(); ?>static/images/carousel/1.jpg" alt="" />
                    <div class="carousel-caption" >
                        <h4 class="back-light">This is the demo page of Book Repository.</h4>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/carousel/2.jpg" alt="" />
                    <div class="carousel-caption ">
                        <h4 class="back-light">This is the demo page of Book Repository.</h4>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/carousel/3.jpg" alt="" />
                    <div class="carousel-caption ">
                        <h4 class="back-light">This is the demo page of Book Repository.</h4>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div class="container" id = "webcontent">