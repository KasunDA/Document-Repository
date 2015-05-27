<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('static/css/stylesheet.css'); ?>" />
        <link href="<?php echo base_url('static/css/bootstrap.min.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <!-- jQuery -->
        <script src="<?php echo base_url('static/js/jquery.js'); ?>"></script>
        <!-- Bootstrap JavaScript -->
        <script src="<?php echo base_url('static/js/bootstrap.min.js'); ?>"></script>

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
                                    echo "<li><a href='".base_url('index.php/auth')."'><b><span class='glyphicon glyphicon-log-in'></span> Login</b></a></li>";
                                }
                            ?>
                        </a></li>
                    </ul>
                </div>
                
            </div>
        </nav>

        <div class="container" id = "webheader">

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