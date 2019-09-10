<?php include('connection.php'); ?>
<?php include 'header.php'; ?>
<?php include('jump.php'); ?>


<section id="admin_sec" style="margin-bottom: 50px;">
	<div class="container-fluid">
		<div class="row">
			<!--Aside BAr Which is Col-md-3 -->	
			<?php include('admin_aside.php');?>

			<div class="col-md-10">
				<div class="card">
					<div class="card-body" style="background-color: #3498DB;color:#fff;">
						<div class="row">
							<div class="col-md-4">
								<h4>Patient Details</h4>
							</div>
							<div class="col-md-8">
									<form class="form-group" style="margin-bottom: 0rem;" action="search_patient.php" method="post">
										<div class="row">
											<div class="col-md-9">
												<div class="input-group input-group-sm mb-3"> 
												  <input type="text" name="p_search"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder=" Search By Phone No/ Email/ Patient Name">
												</div>
											</div>
											<div class="col-md-3">
												<input type="submit" name="p_search_submit" value="Search" class="btn btn-light btn-sm">
											</div>
										</div>
									</form>
							</div>
						</div>
					</div>

					<div class="card-body"> 
						<table class="table table-bordered table-hover">
							<thead align="Center">
								<tr>
									<th scope="col">SI</th> 
								    <th scope="col">Patient's Full Name</th> 
								    <th scope="col">Email Adress</th>
								    <th scope="col">Contact Num</th>
								    <th scope="col">Apointed Doctor</th>
								    <th scope="col">Payment</th>
								    <th scope="col">Action</th>								    
								</tr>
							</thead>
							<tbody align="Center">
								<?php get_patient_details();?>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
			<!-- <div class="col-md-1"></div> -->
		</div> 
	</div>
</section>
<script>
	function bristy(){
		return confirm('Are you sure delete this ?');
	}
</script>

<?php include 'footer.php'; ?>