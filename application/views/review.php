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
			<h1>Add a New Book Title and a Review</h1>
			<form class="form-class" action="review">
				<div class="form-group">
					<label>Book Title:</label>
					<input type="text" name="title">
				</div>
				<div class="form-group">
					<label>Author:</label>
					<p>Choose from the lsit:</p>
					<select class="form-control" name="author">
						<option>Author 1</option>
						<option>Author 2</option>
						<option>Author 3</option>
					</select>
					<p>Or add a new author</p>
					<input type="text" name="newAuthor">
					<label>Review:</label>
					<textarea class="form-control" rows="3" name="review"></textarea>
				</div>
				<div class="form-group">
					<label>Rating:</label>
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
					<label>Stars</label>
				</div>
				<div class="form-group">
					<button>Add Book and Review</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>