<?php
	$conn = mysqli_connect('localhost','root','','hmsdb');
	if (isset($_POST['log_in'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * from login_db where email='$email' and pass='$password' ";
		$result = mysqli_query($conn ,$sql);
		if (mysqli_num_rows($result)==1) {
			header('location:admin-panel.php');
		}else
		echo"<script>alert('Email Or Password was Wrong!!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}//Log iN End Here
	if(isset($_POST['sign_up'])) {
		header('location:signup.php');
	}// Visit Sign UP Page

	//Submit Patient Data
	if (isset($_POST['pat_submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$p_email = $_POST['p_email'];
		$p_contact = $_POST['p_contact'];
		$doc_app = $_POST['doc_app'];
		$p_payment = $_POST['p_payment'];

		$sql ="INSERT into bookapp(fname,lname,p_email,p_contact,doc_app,p_payment) values('$fname','$lname','$p_email','$p_contact','$doc_app','$p_payment')";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			echo"<script>alert('Appoinment Successfully!!')</script>";
			echo "<script>window.open('admin-panel.php','_self')</script>";
		}

	}// end of Book Appoinment



	//All The function Goes Here
	function get_patient_details(){
		global $conn; 
		$sql ="SELECT * from bookapp";
		$result = mysqli_query($conn, $sql);
		$si = 0; 
		while ($row=mysqli_fetch_array($result)) {
		$fname = $row['fname'];
		$lname = $row['lname'];
		$p_email = $row['p_email'];
		$p_contact = $row['p_contact'];
		$doc_app = $row['doc_app'];
		$p_payment = $row['p_payment'];

		$si++;

		echo "<tr> 
				<td>$si</td> 
				<td>$fname $lname</td> 
				<td>$p_email</td>
				<td>$p_contact</td>
				<td>$doc_app</td>
				<td>$p_payment</td>
				<td><a href='update_patient.php?upid=$p_contact' class='btn btn-info btn-sm'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></a><span style='margin: 0 2px;'></span><a onclick ='return bristy();' href='delete.php?delid=$p_contact' class='btn btn-danger btn-sm'><i class='fa fa-trash fa-lg' aria-hidden='true'></i></a></td>
			</tr>";

		}
	}

// Filtering data by searching Phone number

//search Patient's  data 
	if (isset($_POST['p_search_submit'])) {

		function show_search_item(){ 
		global $conn;
		$contact =$_POST['p_search'];
		$sql ="SELECT * from bookapp where  p_contact='$contact' OR p_email='$contact' OR fname='$contact' OR lname='$contact' ";
		$result = mysqli_query($conn, $sql); 
		$si = 0;
		while($row=mysqli_fetch_array($result)) {
		$fname = $row['fname'];
		$lname = $row['lname'];
		$p_email = $row['p_email'];
		$p_contact = $row['p_contact'];
		$doc_app = $row['doc_app'];
		$p_payment = $row['p_payment'];

		$si++;
		echo"<tr> 
				<td>$si</td> 
				<td>$fname $lname</td> 
				<td>$p_email</td>
				<td>$p_contact</td>
				<td>$doc_app</td>
				<td>$p_payment</td>
				<td><a href='update_patient.php?upid=$p_contact' class='btn btn-info btn-sm'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></a><span style='margin: 0 2px;'></span><a onclick ='return bristy();' href='delete.php?delid=$p_contact' class='btn btn-danger btn-sm'><i class='fa fa-trash fa-lg' aria-hidden='true'></i></a></td>
			</tr>";

			} 
		}

	}


	//Add stuff and Fetch Data to details 


	if (isset($_POST['stu_submit'])) {
		$s_fname = $_POST['s_fname'];
		$s_lname = $_POST['s_lname'];
		$s_contact = $_POST['s_contact'];
		$s_address = $_POST['s_address'];
		$s_degisnation = $_POST['s_degisnation'];
		$s_sallery = $_POST['s_sallery'];
		$s_word = $_POST['s_word'];
		$s_shift = $_POST['s_shift'];

		$sql ="INSERT into 
		stuff_info(s_fname,s_lname,s_contact,s_address,s_degisnation,s_sallery,s_word,s_shift) 
		values('$s_fname','$s_lname','$s_contact','$s_address','$s_degisnation','$s_sallery','$s_word','$s_shift')";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			echo"<script>alert('Stuff Added Successfully!!')</script>";
			echo "<script>window.open('stuff_details.php','_self')</script>";
		}  
	}

	// Fetch Stuff Details Here
	function get_stuff_details(){
		global $conn;
		$sql ="SELECT * from stuff_info";
		$result = mysqli_query($conn, $sql);
		$si = 0;
		while ($row=mysqli_fetch_array($result)) { 
		$s_fname = $row['s_fname'];
		$s_lname = $row['s_lname'];
		$s_contact = $row['s_contact'];
		$s_address = $row['s_address'];
		$s_degisnation = $row['s_degisnation'];
		$s_sallery = $row['s_sallery'];
		$s_word = $row['s_word'];
		$s_shift = $row['s_shift'];
		$si++;
		echo "<tr>
				<td>$si</td>  
				<td>$s_fname $s_lname</td> 
				<td>$s_contact</td>
				<td>$s_degisnation</td>
				<td>$s_shift</td>
				<td>$s_word</td>
				<td>$s_sallery</td>
				<td>$s_address</td>
				<td><a href='update_stuff.php?upid=$s_contact' class='btn btn-info btn-sm'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></a><span style='margin: 0 2px;'></span><a onclick ='return bristy();' href='s_delete.php?delid=$s_contact' class='btn btn-danger btn-sm'><i class='fa fa-trash fa-lg' aria-hidden='true'></i></a></td>
			</tr>";

		}
	}

	//Search Stuff Data
	if (isset($_POST['s_search_submit'])) {

		function show_s_search_item(){ 
		global $conn;
		$si = 0;
		$sf_contact =$_POST['s_search'];
		$sql ="SELECT * from stuff_info where  s_contact='$sf_contact' OR s_degisnation='$sf_contact' OR s_fname='$sf_contact' OR s_lname='$sf_contact' ";
		$result = mysqli_query($conn, $sql); 
		
		while($row=mysqli_fetch_array($result)) {
		$s_fname = $row['s_fname'];
		$s_lname = $row['s_lname'];
		$s_contact = $row['s_contact'];
		$s_address = $row['s_address'];
		$s_degisnation = $row['s_degisnation'];
		$s_sallery = $row['s_sallery'];
		$s_word = $row['s_word'];
		$s_shift = $row['s_shift'];
		$si++;
		echo "<tr>
				<td>$si</td>  
				<td>$s_fname $s_lname</td> 
				<td>$s_contact</td>
				<td>$s_degisnation</td>
				<td>$s_shift</td>
				<td>$s_word</td>
				<td>$s_sallery</td>
				<td>$s_address</td>
				<td><a href='update_stuff.php?upid=$s_contact' class='btn btn-info btn-sm'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></a><span style='margin: 0 2px;'></span><a onclick ='return bristy();' href='s_delete.php?delid=$s_contact' class='btn btn-danger btn-sm'><i class='fa fa-trash fa-lg' aria-hidden='true'></i></a></td>
			</tr>";

			} 
		}

	}


	/// ===Doctors Details Goes Here

		//All The function Goes Here
	function get_doc_details(){
		global $conn; 
		$sql ="SELECT * from doc_info";
		$result = mysqli_query($conn, $sql);
		$si = 0; 
		while ($row=mysqli_fetch_array($result)) {
		$d_fname = $row['d_fname'];
		$d_lname = $row['d_lname'];
		$d_spesalist = $row['d_spesalist'];
		$d_sallery = $row['d_sallery'];
		$d_room = $row['d_room'];
		$d_fee_visit = $row['d_fee_visit'];
		$d_contact = $row['d_contact'];
		$d_adress = $row['d_adress'];

		$si++;

		echo "<tr> 
				<td>$si</td> 
				<td>$d_fname $d_lname</td> 
				<td>$d_contact</td>
				<td>$d_spesalist</td>
				<td>$d_sallery</td>
				<td>$d_room</td>
				<td>$d_fee_visit</td> 
				<td>$d_adress</td>
				<td><a href='update_doc.php?upid=$d_contact' class='btn btn-info btn-sm'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></a><span style='margin: 0 2px;'></span><a onclick ='return bristy();' href='d_delete.php?delid=$d_contact' class='btn btn-danger btn-sm'><i class='fa fa-trash fa-lg' aria-hidden='true'></i></a></td>
			</tr>";

		}
	}




	// Upadate Patient Table /////
	/// ====PATIENT =========////


?>
