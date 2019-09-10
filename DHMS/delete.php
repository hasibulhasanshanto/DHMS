<?php
include('connection.php');
$delid = $_GET['delid'];
$del = " DELETE from bookapp where p_contact='$delid' ";
$result = mysqli_query($conn,$del);
//header(' location: patient_details.php');
	//$result = mysqli_query($conn,$sql);
	if ($result) {
		echo"<script>alert('Deleted  Successfully!!')</script>";
		echo "<script>window.open('patient_details.php','_self')</script>";
	}
	mysqli_close($conn);

?>