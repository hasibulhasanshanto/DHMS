<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

</head>
<body style="background:url(images/login_cover2.jpg) no-repeat; background-size: cover; ">
<section id="login_sec">
	<div class="container" style="width:380px; margin-top: 180px; margin-right: 300px;">
		<div class="card">
			<img src="images/hms.jpg" class="card-img-top" alt="">  
			<div class="card-body">
			<form class="form-group" action="connection.php" method="post">
			  <div class="form-group">
			     <!-- <label for="exampleInputEmail1">Email address</label> -->
			    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <!-- <label for="exampleInputPassword1">Password</label> -->
			    <input type="password" class="form-control" name="password" placeholder="Password" required>
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
			    <label class="form-check-label" for="exampleCheck1">Logged me in..</label>
			  </div> 
		      	<input type="submit" class="btn btn-primary" name="log_in" value="Login">
		      	<input type="submit" class="btn btn-primary" name="sign_up" value="Sign Up" style="margin-left: 145px";>
			</form>
			</div>
		</div>
	</div>
</section>
	
	<!--Essential Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--Bootstrap Javascript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>