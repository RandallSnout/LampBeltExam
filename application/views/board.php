<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/">Books Review</a>
		    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/logOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<h1>Welcome <?= $name ?>!</h1>
		<div class="col-md-10">
			<h3>Your Trip Plans</h3>
					<table class="table table-striped outlined">
			<thead><th>Destination</th><th>Travel Start Date</th><th>Travel End Date</th><th>Plan</th></thead>
<?php 
			// foreach($plans as $plan) { 
?>
			<tr><td><?= $destination ?></td><td><?= $startDate ?></td><td><?= $endDate ?></td><td><?= $plan ?></td></tr>
<?php 
			// } 
?>
		</table>
		</div>
				<div class="col-md-12">
				<h3>Other User's Travel Plans</h3>
					<table class="table table-striped outlined">
			<thead><th>Name</th><th>Destination</th><th>Travel Start Date</th><th>Travel End Date</th><th>Do you want to Join?</th></thead>
<?php 
			foreach($plans as $plan) { 
?>
			<tr><td>Name</td><td><a href="destProf/"> <?= $plan['destination'] ?></a></td><td>Start Date</td><td>End Date</td><td><a href="#">Join</a></td></tr>
<?php 
			} 
?>
		</table>
		</div>
		<div class="col-md-2 pull-right">
			<a href="addNewTrip/<?= $id ?>">Add Travel Plan</a>
		</div>
	</div>
</body>
</html>