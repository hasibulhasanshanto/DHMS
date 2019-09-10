<?php include('connection.php'); ?>
<?php include 'header.php'; ?>
<?php include('jump.php'); ?>

<section id="admin_sec" style="margin-bottom: 50px;">
	<div class="container-fluid">
		<div class="row">
			<!-- Aside BAr Which is Col-md-3  --> 
			<?php include('admin_aside.php');?>

			<div class="col-md-10">
				<div class="card">
					<div class="card-body" style="background-color: #3498DB;color:#fff;">
						<div class="row">
							<div class="col-md-4">
								<h4>Stuff Details</h4>
							</div>
							<div class="col-md-8">
									<form class="form-group" style="margin-bottom: 0rem;" action="search_stuff.php" method="post">
										<div class="row">
											<div class="col-md-9">
												<div class="input-group input-group-sm mb-3"> 
												  <input type="text" name="s_search"class="form-control" aria-label="Sizing example input" placeholder=" Search By Phone No/ Name / Designation">
												</div>
											</div>
											<div class="col-md-3">
												<input type="submit" name="s_search_submit" value="Search" class="btn btn-light btn-sm">
											</div>
										</div>
									</form>
							</div>
						</div>
					</div>

					<div class="card-body" id="result"> 
						<table class="table table-bordered table-hover">
							<thead align="Center">
								<tr>
									<th scope="col">SI</th>
								    <th scope="col">Stuff Full Name</th> 
								    <th scope="col">Contact Num</th>
								    <th scope="col">Designation</th>
								    <th scope="col">Shift</th>
								    <th scope="col">Word</th>
								    <th scope="col">Sallery</th>
								    <th scope="col">Address</th>
								    <th scope="col">Action</th>
								</tr>
							</thead>
							<tbody align="Center">
								<?php show_s_search_item(); ?>  
							</tbody>
						</table>
					</div>
				</div> 
			</div> 
		</div> 
	</div>
</section> 
<?php include 'footer.php'; ?>