<?php include 'header.php'; ?>
<?php include('jump.php'); ?>
<section id="admin_sec" style="margin-bottom: 50px;">
	<div class="container-fluid">
		<div class="row">
		<!--Aside BAr Which is Col-md-3 -->	
		<?php include('admin_aside.php');?>

			 <div class="col-md-7">
				<div class="card">
					<div class="card-body" style="background-color: #3498DB;color:#fff;">
						<h3>Hello Admin...!!!</h3>
					</div>

					
					<div class="card-body">
						<table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">SI</th>
						      <th scope="col">Operaton Completed</th>
						      <th scope="col">Ambulance Hire</th>
						      <th scope="col">ICU info</th>
						      <th scope="col">Pharmacy Info</th>
						      <th scope="col">Empty Bed</th> 
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>						      
						      <td>Otto</td>
						      <td>@mdo</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td>Jacob</td>
						      <td>Thornton</td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td>Jacob</td>
						      <td>Thornton</td>
						    </tr>
						    <tr>
						      <th scope="row">4</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td>Jacob</td>
						      <td>Thornton</td>
						    </tr>
						    <tr>
						      <th scope="row">5</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td>Jacob</td>
						      <td>Thornton</td>
						    </tr>						     
						  </tbody>
						</table> 
					</div> 
				</div>
			</div> 
			<div class="col-md-3">
				<div class="card">
					<div class="card-body" style="background-color: #3498DB;color:#fff;">
						<h4>Calender</h4>
					</div>

				<center><h3 style="margin-top: 100px; color: red;font-size: 30px; margin-bottom: 185px;">Calender will be Added Here..!!</h3></center>
				</div>
			</div>	
		</div>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script>
<script>
	$(document).ready(function () {
		swal({
		  title: 'Welcome!',
		  text: 'Have a great day !!',
		  imageUrl: 'https://images.unsplash.com/photo-1496932388010-82366a36677e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c1d9b125d84a60f5e54a1d0df09059d5&auto=format&fit=crop&w=750&q=80',
		  imageWidth: 450,
		  imageHeight: 250,
		  imageAlt: 'Custom image',
		  animation: true
		})
	});
</script>
<?php include 'footer.php'; ?> 
