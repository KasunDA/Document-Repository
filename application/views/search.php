<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Document Repository</title>
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= base_url('static/css/stylesheet.css')?>" rel="stylesheet" type="text/css" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body>
		<div class="container" id = "webcontent">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<?php if (isset($result[0]->name)) {?>
					<table class="table">
						<thead>
							<tr>
								<th>
									Name
								</th>
								<th>
									Author
								</th>
								<th>
									Contributor
								</th>
								<th>
									ISBN
								</th>
								<th>
									
								</th>
							</tr>
						</thead>
						
						<?php 
						$size = sizeof($result);
						$row_style = "success";
						?>

						<tbody>
							<?php 
							for($book_count = 0; $book_count < $size; $book_count++ ) { 
							if ($row_style == "success"){
								$row_style = "active";
							}
							else {
								$row_style = "success";
							}
							?>
							<tr class="<?php echo $row_style ?>">
								<td>
									<b><?php echo $result[$book_count]->name;?></b>
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									02/04/2012
								</td>
								<td>
									Declined
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php } ?>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<center>
				<address>
					<strong>Copyright © 2015</strong>
				</address>
			</center>
			</div>
		</div>
	</div>
	
	
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>