<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Appointment Keeper</a>
		    </div>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<h1>Welcome!</h1>
		<div class="col-md-5 outlined">
			<div class='errors'>
<?php 
				  if($this->session->flashdata('errors')) {
				    foreach($this->session->flashdata('errors') as $value) { 
?>
      				<p><?= $value ?></p>
<?php
		  			}	
			    } 
?>
			</div>
			<h1>Register</h1>
			<form action="signUp" method="post">
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>
			<div class="form-group">
				<label>User Email:</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<p>*Password should be at least 8 characters</p>
				<label>Confirm Password:</label>
				<input type="password" name="password_check" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Date Of Birth:</label>
				<input type="date" name="dateOfBirth" class="form-control" placeholder="MM/DD/YYYY">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-success pull-right">Register</button>
			</div>
			</form>
		</div>
		<div class="col-md-5 col-md-offset-1 outlined">
				<div class='errors'>
<?php 
				  if($this->session->flashdata('errors2')) {
				    foreach($this->session->flashdata('errors2') as $value) { 
?>
      				<p><?= $value ?></p>
<?php
		  			}	
			    } 
?>		
				</div>
			<h1>Log In</h1>
			<form action="signIn" method="post">
			<div class="form-group">
				<label>User Email:</label>
				<input type="Email" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-success pull-right">Login</button>
			</form>
		</div>
	</div>
</body>
</html>