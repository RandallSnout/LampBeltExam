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
				<li><a href="nextPage">Sign In</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<div class="col-md-5 outlined">
			<h1>Register</h1>
			<form action="signUp">
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Alias:</label>
				<input type="text" name="alias" class="form-control" placeholder="Alias">
			</div>
			<div class="form-group">
				<label>Email address:</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
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
				<button type="submit" class="btn btn-success pull-right">Register</button>
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
			<button type="submit" class="btn btn-success pull-right">Login</button>
			</form>
		</div>
	</div>
</body>
</html>