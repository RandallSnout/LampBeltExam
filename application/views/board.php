<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/">Travel Buddies</a>
		    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/logOut">Log Out</a></li>
			</ul>
	      </div>
	  </div><!-- /.container-fluid -->
	</nav>	
	<div class="container">
		<h1>Welcome <?= $current_user['name'] ?>! User #<?= $current_user['id'] ?></h1>
		<div class="col-md-10">
			<h3>Your Trip Plans</h3>
					<table class="table table-striped outlined">
			<thead><th>Destination</th><th>Travel Start Date</th><th>Travel End Date</th><th>Plan</th></thead>
<?php 
			foreach($userTrips as $trip) { 
?>
			<tr><td><?= $trip['destination'] ?></td><td><?= $trip['start_date'] ?></td><td><?= $trip['end_date'] ?></td><td><?= $trip['plan'] ?></td></tr>
<?php 
			} 
?>
		</table>
		</div>
				<div class="col-md-12">
				<h3>Other User's Travel Plans</h3>
					<table class="table table-striped outlined">
			<thead><th>Name</th><th>Destination</th><th>Travel Start Date</th><th>Travel End Date</th><th>Do you want to Join?</th></thead>
<?php 
			foreach($otherTrips as $otherTrip) { 
?>
			<tr><td><?= $otherTrip['name'] ?></td><td><a href="/destProf/<?= $otherTrip['id'] ?>"><?= $otherTrip['destination'] ?></a></td><td><?= $otherTrip['start_date'] ?></td><td><?= $otherTrip['end_date'] ?></td><td><a href="/join/<?= $otherTrip['id'] ?>">Join</a></td></tr>
<?php 
			} 
?>
		</table>
		</div>
		<div class="col-md-2 pull-right">
			<a href="/addNewTrip/<?= $current_user['id'] ?>">Add Travel Plan</a>
		</div>
	</div>
</body>
</html>