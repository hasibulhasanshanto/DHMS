<?php include 'header.php'; ?>
<?php include('jump.php'); ?>
<?php
	include 'connection.php';
	$upid = $_GET['upid']; 
	$sql ="SELECT * from bookapp where p_contact=$upid";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_array($result)) {
		echo $row['p_contact'].'<br>';
		echo $row['fname'] .'<br>';
		echo $row['lname'] .'<br>';
		echo $row['p_email'] .'<br>';
		echo $row['p_contact'] .'<br>';
		echo $row['doc_app'] .'<br>';
		echo $row['p_payment'] .'<br>';
	}

exit;
?>

<form class="was-validated">
  <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>

  <div class="form-group">
    <select class="custom-select" required>
      <option value="">Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
</form>