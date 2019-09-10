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
						<h4>Book an Appoinment</h4>
					</div>


					<div class="card-body">
						<form action="connection.php" method="post" class="was-validated form-group input-group-sm mb-3" required>
							<div class="row">
								<div class="col-md-6"> 
									<label>First Name:</label>
									<input type="text" name="fname" class="form-control" required><br>
									<label>Email Name:</label>
									<input type="email" name="p_email" class="form-control"><br>
									<label>Apoin Doctoctor:</label>
									<div class="form-group">
										<select name="doc_app" class="custom-select" required>
											<option value="">Choose...</option>
											<option value="Dr. Habib">Dr. Habib</option>
											<option value="Dr. Kamal Uddin">Dr. Kamal Uddin</option>
											<option value="Dr. Asif Chow dhury">Dr. Asif Chow dhury</option>
										</select>
									</div>
									<br>
								</div>

								<div class="col-md-6"> 
									<label>Last Name:</label>
									<input type="text" name="lname" class="form-control" required><br>
									<label>Contact Num:</label>
									<input type="text" name="p_contact" class="form-control" required><br> 
									<label>Payment:</label>
									<div class="form-group">
										<select name="p_payment" class="custom-select" required>
											<option value="">Choose...</option>
											<option value="Pay Later">Pay Later</option>
											<option value="Paid">Paid</option>
											<option value="Free">Free</option>
											<option value="Get 50% Discount">Get 50% Discount</option>
										</select>
									</div><br>
								</div>
							</div>
							<center><input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appoinment"></center>
						</form>
					</div>


<!-- 					<div class="card-body">
						<form action="connection.php" method="post" class="form-group input-group-sm mb-3" required>
							<label>First Name:</label>
							<input type="text" name="fname" class="form-control" required><br>
							<label>Last Name:</label>
							<input type="text" name="lname" class="form-control" required><br>
							<label>Email Name:</label>
							<input type="text" name="p_email" class="form-control"><br>
							<label>Contact Num:</label>
							<input type="text" name="p_contact" class="form-control" required><br>
							<label>Apoin Doctoctor:</label>
							<div class="form-group">
								<select name="doc_app" class="custom-select" required>
									<option value="Dr. Habib">Dr. Habib</option>
									<option value="Dr. Kamal Uddin">Dr. Kamal Uddin</option>
									<option value="Dr.Asif Chow dhury">Dr.Asif Chow dhury</option>
								</select>
							</div>
							<br>
							<label>Payment:</label>
							<div class="form-group">
								<select name="p_payment" class="custom-select" required>
									<option value="Pay Later">Pay Later</option>
									<option value="Paid">Paid</option>
									<option value="Free">Free</option>
									<option value="Get 50% Discount">Get 50% Discount</option>
								</select>
							</div><br>
							<center><input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appoinment"></center>
							 
						</form>
					</div> -->

				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?> 
