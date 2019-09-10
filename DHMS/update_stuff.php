<?php include 'header.php'; ?>
<?php include('jump.php'); ?>
<?php
//Fetch Data from DB of Patient Apoinment And Wii Be Updated
	include 'connection.php';
	$upid = $_GET['upid']; 
	$sql ="SELECT * from stuff_info where s_contact=$upid";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_array($result)) { 
		$us_fname = $row['s_fname'];
		$us_lname = $row['s_lname'];
		$us_contact = $row['s_contact'];
		$us_address = $row['s_address'];
		$us_degisnation = $row['s_degisnation'];
		$us_sallery = $row['s_sallery'];
		$us_word = $row['s_word'];
		$us_shift = $row['s_shift'];
	}

 // Updated Stuff info ==================================

	if (isset($_POST['u_stu_submit'])) {  

		$us_fname = $_POST['us_fname'];
		$us_lname = $_POST['us_lname'];
		$us_contact = $_POST['us_contact'];
		$us_address = $_POST['us_address'];
		$us_degisnation = $_POST['us_degisnation'];
		$us_sallery = $_POST['us_sallery'];
		$us_word = $_POST['us_word'];
		$us_shift = $_POST['us_shift'];

	$sql = "UPDATE stuff_info
		SET s_fname = '$us_fname', s_lname= '$us_lname', s_contact= '$us_contact', s_address= '$us_address', s_degisnation= '$us_degisnation', s_sallery= '$us_sallery', s_word= '$us_word', s_shift= '$us_shift'
		WHERE s_contact = '$upid' ";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			echo"<script>alert('Updated Successfully!!')</script>";
			echo "<script>window.open('stuff_details.php','_self')</script>";
		}
		else{
			echo"<script>alert('Something wrong !!')</script>";
		}
		mysqli_close($conn);
	} 
?>

<section id="admin_sec" style="margin-bottom: 50px;">
	<div class="container-fluid">
		<div class="row">
		<!--Aside BAr Which is Col-md-3 -->	
		<?php include('admin_aside.php');?>

			<div class="col-md-10">
				<div class="card">
					<div class="card-body" style="background-color: #3498DB;color:#fff;">
						<h6>Add Hospital Stuff Info</h6>
					</div>
					<div class="card-body">
						<form action="" method="post" class="was-validated form-group input-group-sm mb-3" required>
							<div class="row">
								<div class="col-md-6"> 
									<label>First Name:</label>
									<input type="text" name="us_fname" class="form-control" value="<?php echo $us_fname; ?>" required><br>
									<label>Last Name:</label>
									<input type="text" name="us_lname" class="form-control" value="<?php echo $us_lname; ?>" required><br>
									<label>Phone Num:</label>
									<input type="text" name="us_contact" class="form-control" value="<?php echo $us_contact; ?>" required><br>
									<label>Address:</label>
									<input type="text" name="us_address" class="form-control" value="<?php echo $us_address; ?>" required><br>
									<br> 
								</div>

								<div class="col-md-6"> 
									<label>Designation:</label>
									<input type="text" name="us_degisnation" class="form-control" value="<?php echo $us_degisnation; ?>" required><br>
									<label>Sallery:</label>
									<input type="text" name="us_sallery" class="form-control" value="<?php echo $us_sallery; ?>" required><br>
									<label>Word Num:</label>
									<input type="text" name="us_word" class="form-control" value="<?php echo $us_word; ?>" required><br>
									<label>Working Shift:</label>
									<div class="form-group">
										<select name="us_shift" class="custom-select" value="<?php echo $us_word; ?>" required>
											<option value="">Choose...</option>
											<option value="Morning Shift">Morning Shift [6am-2pm]</option>
											<option value="Day Shift">Day Shift [2pm-10pm]</option>
											<option value="Night Shift">Night Shift [10pm-6am]</option>
										</select>
										<div class="invalid-feedback">Please select One	!!</div>
									</div>
								</div>
							</div>
							<center><input type="submit" class="btn btn-primary" name="u_stu_submit" value="Save"></center>
						</form>
					</div>
				</div>
			</div> 
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
