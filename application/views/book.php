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
				<li><a href="review">Add Book Review</a></li>
				<li><a href="logoOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<div class="col-md-12">
			<h1>Book Title</h1>
			<h2>Author: Author Name</h2>
		</div>
		<div class="col-md-7">
			<h1>Recent</h1> 
			<div class="book">
				<h3>Book Name Here</h3>
				<h4>Rating:<span>Stars Here</span></h4>
				<p><a href="users">User Name</a> says: comment here</p>
				<p>Posted on: Date of creation here</p>
				<a href="delete">Delete your review</a>
			</div>
		</div>
		<div class="col-md-5">
			<h1>Add a Review</h1> 
			<div class="bookList outlined">
				
			</div>
			<div class="row">
				<div class="col-md-2">
					<p>Rating:</p>
				</div>
				<div class="col-md-2">
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="col-md-2">
					<p>Stars</p>
				</div>
			</div>
			<div class="row">
				<form>
					<div class="form-group">
						<button type="submit" class="btn btn-success pull-right">Submit Review</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>