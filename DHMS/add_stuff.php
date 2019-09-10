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
						<h4>Add Hospital Stuff Info</h4>
					</div>
					<div class="card-body">
						<form action="connection.php" method="post" class="was-validated form-group input-group-sm mb-3" required>
							<div class="row">
								<div class="col-md-6"> 
									<label>First Name:</label>
									<input type="text" name="s_fname" class="form-control" required><br>
									<label>Last Name:</label>
									<input type="text" name="s_lname" class="form-control" required><br>
									<label>Phone Num:</label>
									<input type="text" name="s_contact" class="form-control" required><br>
									<label>Address:</label>
									<input type="text" name="s_address" class="form-control" required><br>
									<br> 
								</div>

								<div class="col-md-6"> 
									<label>Designation:</label>
									<input type="text" name="s_degisnation" class="form-control" required><br>
									<label>Sallery:</label>
									<input type="text" name="s_sallery" class="form-control" required><br>
									<label>Word Num:</label>
									<input type="text" name="s_word" class="form-control" required><br>
									<label>Working Shift:</label>
									<div class="form-group">
										<select name="s_shift" class="custom-select" required>
											<option value="">Choose...</option>
											<option value="Morning Shift">Morning Shift [6am-2pm]</option>
											<option value="Day Shift">Day Shift [2pm-10pm]</option>
											<option value="Night Shift">Night Shift [10pm-6am]</option>
										</select>
										<div class="invalid-feedback">Please select One	!!</div>
									</div>
								</div>
							</div>
							<center><input type="submit" class="btn btn-primary" name="stu_submit" value="Save"></center>
						</form>
					</div>
				</div>
			</div> 
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
