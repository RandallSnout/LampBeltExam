<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Books Review</a>
		      <ul class="nav navbar-nav navbar-left">
					<li><a href="/">Home</a></li>
				</ul>
		    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signin">Sign In</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<div class="col-md-5 outlined">
			<h1>Register</h1>
			<form action="signUp">
			<div class="form-group">
				<label>Email address:</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label>First Name:</label>
				<input type="text" name="first_name" class="form-control" placeholder="First Name">
			</div>
			<div class="form-group">
				<label>Last Name:</label>
				<input type="text" name="last_name" class="form-control" placeholder="Last Name">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="password" name="confirm_password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success pull-right">Submit</button>
			</div>
			</form>
		</div>
		<div class="col-md-5 col-md-offset-1 outlined">
			<h1>Sign In</h1>
			<form action="login">
			<div class="form-group">
				<label>Email address:</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-success pull-right">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>