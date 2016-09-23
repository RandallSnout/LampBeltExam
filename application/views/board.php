<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/">Books Review</a>
		      <ul class="nav navbar-nav navbar-left">
					<li><a href="/">Home</a></li>
				</ul>
		    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/addBook">Add Book Review</a></li>
				<li><a href="/logOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<h1>Welcome <?= $alias ?>!</h1>
		<div class="col-md-7">
			<h2>Recent Book Reviews</h2> 
			<div class="book">
				<h3><a href="/book/">Book Name Here</a> </h3>
				<h4>Rating:<span>Stars Here</span></h4>
				<p><a href="/user/">User Name</a> says: comment here</p>
				<p>Posted on: Date of creation here</p>
			</div>
		</div>
		<div class="col-md-5">
			<h1>Other Books with Reviews</h1> 
			<div class="bookList outlined scroll">
				
			</div>
			
		</div>
	</div>
</body>
</html>