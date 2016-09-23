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
				<li><a href="addBook">Add Book Review</a></li>
				<li><a href="logoOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<div class="col-md-12">
			<h1>Add a New Book Title and a Review</h1>
			<form class="form-class form-horizontal" action="book" method="post">
				<div class="form-group">
					<label>Book Title:</label>
					<input class="form-control"  type="text" name="title">
				</div>
				<div class="form-group">
					<div class="row">
					<div class="col-md-1">
					<label>Author:</label>
					</div>
					<div class="col-md-2">
					<p>Choose from the lsit:</p>
					<p>Or add a new author</p>
					</div>
					<div class="col-md-4">
					<select class="form-control" name="author1">
						<option disabled selected="">Pick an Author</option>
						<option>Author 2</option>
						<option>Author 3</option>
					</select>
					<input class="form-control" type="text" name="author">
					</div></div>
					<div class="row">
					<label>Review:</label>
					<textarea class="form-control" rows="3" name="review"></textarea>
					</div>

				</div>
				<div class="row">
				<div class="form-inline">
					<label>Rating:</label>
					<select class="form-control" name='stars'>
						<option disabled selected="">Select Stars</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
					<label>Stars</label>
				</div>
				</div>
				<div class="row">
				<div class="form-group">
					<button class="pull-right">Add Book and Review</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>