
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
								<td>
									Download
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php } ?>
				</div>
			</div>

