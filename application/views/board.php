<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/">Appointment keeper</a>
		    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/logOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<h1>Welcome <?= $current_user['name'] ?>!</h1>
		<div class="row">
			<div class="col-md-10">
				<h3>Your Appointments for <?= date('F d, Y') ?>:</h3>
				<table class="table table-striped outlined">
					<thead><th>Tasks</th><th>Time</th><th>Staus</th><th>Action</th></thead>
<?php
				foreach ($todays as $today) {
?>				
					<tr><td><?= $today['task'] ?></td><td><?= $today['time'] ?></td><td><?= $today['status'] ?></td><td>
<?php 
					if($today['status'] !== 'Done') {
?>
					<a href="/edit/<?= $today['id'] ?>"><button class="btn btn-success">Edit</button></a>  <a href="/delete/<?= $today['id'] ?>"><button class="btn btn-danger">Delete</button></a>
<?php
					} else {
						echo "completed";
					}
?>

					</td></tr>
<?php
				}
?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h3>Your Upcoming Appointments:</h3>
				<table class="table table-striped outlined">
					<thead><th>Tasks</th><th>Date</th><th>Time</th></thead>
<?php
				foreach ($futures as $future) {
?>
					<tr><td><?= $future['task'] ?></td><td><?= $future['date'] ?></td><td><?= $future['time'] ?></td></tr>
<?php
				}
?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 outlined">
				<h4>Add Appointment</h4>
				<div class='errors'>
<?php 
			$errors = $this->session->flashdata('errors');
				if ($errors) {
					foreach ($errors as $error) {
?>

				<p><?= $error ?></p>
<?php 
					}; 
				}; 
?>
				</div>
				<form action="/create" method="post">
					<label>Date</label>
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<input class="form-control" type="date" name="date">
					</div>
					<label>Time</label>
					<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-hourglass"></span></div>
						<input class="form-control" type="time" name="time">
					</div>
					<div class="form-group">
						<label>Task</label>
						<input class="form-control" type="text" name="task">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-success pull-right">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>