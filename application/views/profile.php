<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Travel Buddies</a>
		      <ul class="nav navbar-nav navbar-left">
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
		<div class="col-md-7 pad">
			<h1><?= $trip['destination'] ?></h1>
			<h2>Planned By: <?= $trip['name'] ?></h2>
			<h2>Description: <?= $trip['plan'] ?></h2>
			<h3>Travel Date From: <?= $trip['start_date'] ?></h3>
			<h3>Travel Date From: <?= $trip['end_date'] ?></h3>
		</div>
		<div class="col-md-7">
			<h2>Other user's joining the trip:</h2>
<?php 
			foreach($joiners as $joiner) { 
?>
			<h3><?= $joiner['name'] ?></h3>
<?php 
			} 
?>
		</div>
	</div>
</body>
</html>