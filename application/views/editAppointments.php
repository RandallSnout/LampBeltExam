<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/">Appointment keeper</a>
		      <ul class="nav navbar-nav navbar-right">
				<li><a href="/goHome">Home</a></li>
			</ul>
		    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/logOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<form  action="/update/<?= $info['id'] ?>" method="post">
				<input type="hidden" name="id" value="<?= $info['id'] ?>">
				<label>Task</label>
				<div class="form-group">
					<input class="form-control" type="text" name="task" value="<?= $info['task'] ?>">
				</div>
				<label>Status</label>
				<select class="form-control" name="status">
					<option selected=""><?= $info['status'] ?></option>
					<option>Done</option>
					<option>Pending</option>
					<option>Missed</option>
				</select>
				<label>Date</label>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
					<input class="form-control" type="date" name="date" value="<?= $info['date'] ?>">
				</div>
				<label>Time</label>
				<div class="input-group">
				<div class="input-group-addon"><span class="glyphicon glyphicon-hourglass"></span></div>
					<input class="form-control" type="time" name="time" value="<?= $info['time'] ?>">
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success pull-right">Update</button>
				</div>
			</form>
		</div>
	</div>	
</body>
</html>