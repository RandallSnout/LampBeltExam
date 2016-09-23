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
				<li><a href="/addBook">Add Book Review</a></li>
				<li><a href="/logoOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<div class="col-md-7">
			<h1>User Alias:<?= $alias ?></h1>
			<h2>Name:<?= $name ?></h2>
			<h2>Email:<?= $email ?></h2>
			<h3>Total Reviews: #</h3>
		</div>
	</div>
</body>
</html>