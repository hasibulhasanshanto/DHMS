<?php
include('connection.php');
$delid = $_GET['delid'];
$del = " DELETE from stuff_info where s_contact='$delid' ";
$result = mysqli_query($conn,$del); 
	if ($result) {
		//echo"<script>alert('Deleted  Successfully!!')</script>";
		echo "<script>window.open('stuff_details.php','_self')</script>";
	}
	mysqli_close($conn);

?>