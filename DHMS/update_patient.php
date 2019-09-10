<?php include 'header.php'; ?>
<?php include('jump.php'); ?>
<?php
//Fetch Data from DB of Patient Apoinment And Wii Be Updated
	include 'connection.php';
	$upid = $_GET['upid']; 
	$sql ="SELECT * from bookapp where p_contact=$upid";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_array($result)) {
		$u_fname= $row['fname'];
		$u_lname= $row['lname'];
		$up_email= $row['p_email'];
		$up_contact= $row['p_contact'];
		$u_doc_app= $row['doc_app'];
		$up_payment= $row['p_payment'];
	}


	if (isset($_POST['up_submit'])) { 
		$u_fname= $_POST['u_fname'];
		$u_lname= $_POST['u_lname'];
		$up_email= $_POST['up_email'];
		$up_contact= $_POST['up_contact'];
		$u_doc_app= $_POST['u_doc_app'];
		$up_payment= $_POST['up_payment']; 

	$sql = "UPDATE bookapp
		SET fname = '$u_fname', lname= '$u_lname', p_email= '$up_email', p_contact= '$up_contact', doc_app= '$u_doc_app', p_payment= '$up_payment'
		WHERE p_contact = '$upid' ";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			echo"<script>alert('Updated Successfully!!')</script>";
			echo "<script>window.open('patient_details.php','_self')</script>";
		}
		else{
			echo"<script>alert('Something wrong !!')</script>";
		}
		mysqli_close($conn);
	}


//exit;
?>
<section id="admin_sec" style="margin-bottom: 50px;">
	<div class="container-fluid">
		<div class="row">
		<!--Aside BAr Which is Col-md-3 -->	
		<?php include('admin_aside.php');?>

			<div class="col-md-10">
				<div class="card">
					<div class="card-body" style="background-color: #3498DB;color:#fff;">
						<h6>Book an Appoinment</h6>
					</div>

					<div class="card-body">
						<form action=" " method="post" class="was-validated form-group input-group-sm mb-3" required>
							<div class="row">
								<div class="col-md-6"> 
									<label>First Name:</label>
									<input type="text" name="u_fname" class="form-control" value="<?php echo $u_fname; ?>" required><br>
									<label>Email Name:</label>
									<input type="text" name="up_email" class="form-control" required value="<?php echo $up_email; ?>"><br>
									<label>Apoin Doctoctor:</label>
									<div class="form-group">
										<select name="u_doc_app" class="custom-select" required>
											<option value="">Choose...</option>
											<option value="Dr. Habib">Dr. Habib</option>
											<option value="Dr. Kamal Uddin">Dr. Kamal Uddin</option>
											<option value="Dr. Asif Chow dhury">Dr. Asif Chow dhury</option>
										</select>
										<div class="invalid-feedback">Please select One	!!</div>
									</div>
									<br>
								</div>

								<div class="col-md-6"> 
									<label>Last Name:</label>
									<input type="text" name="u_lname" class="form-control" required value="<?php echo $u_lname; ?>"><br>
									<label>Contact Num:</label>
									<input type="text" name="up_contact" class="form-control" required value="<?php echo $up_contact; ?>"><br> 
									<label>Payment:</label>
									<div class="form-group">
										<select name="up_payment" class="custom-select" required>
											<option value="">Choose...</option>
											<option value="Pay Later">Pay Later</option>
											<option value="Paid">Paid</option>
											<option value="Free">Free</option>
											<option value="Get 50% Discount">Get 50% Discount</option>
										</select>
										<div class="invalid-feedback">Please select One	!!</div>
									</div>
								</div>
							</div>
							<center><input type="submit" class="btn btn-primary" name="up_submit" value="Update Info"></center>
						</form>
					</div>
				</div>
			</div> 
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
