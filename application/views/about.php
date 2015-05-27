<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<div class="navbar">
				<a class="navbar-brand" href="#">Document Repository</a>
				<ul class="nav navbar-nav">
					<li>
						<a href="<?= site_url()?>">Home</a>
					</li>
					<li class="active">
						<a href="<?= site_url('/site/about')?>">Contact</a>
					</li>
					<li>
						<a href="<?= site_url('/site/book_add')?>">Add Document</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>