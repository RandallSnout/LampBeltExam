<?php $this->load->view('header'); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="col-md-9 col-md-offset-1">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/">Travel Buddies</a>
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
		<h1>Add a Trip</h1>
		<div class="col-md-6">
			<div class='errors'>
<?php 
				  if($this->session->flashdata('errors3')) {
				    foreach($this->session->flashdata('errors3') as $value) { 
?>
      				<p><?= $value ?></p>
<?php
		  			}	
			    } 
?>
			</div>
			<form id="eventForm" method="post" action="/postTrip" class="form-horizontal">
				<div class="form-group">
					<label>Destination:</label>
					<input class="form-control" type="text" name="destination">
				</div>
				<div class="form-group">
					<label>Description:</label>
					<input class="form-control" type="text" name="description">
				</div>
			    <div class="form-group">
			        <label class="col-xs-3 control-label">Start date</label>
			        <div class="col-xs-5 dateContainer">
			            <div class="input-group input-append date" id="startDatePicker">
			                <input type="text" class="form-control" name="startDate" />
			                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
			            </div>
			        </div>
			    </div>
			    <div class="form-group">
			        <label class="col-xs-3 control-label">End date</label>
			        <div class="col-xs-5 dateContainer">
			            <div class="input-group input-append date" id="endDatePicker">
			                <input type="text" class="form-control" name="endDate" />
			                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
			            </div>
			        </div>
			    </div>
				<div class="form-group">
					<button class="btn btn-success">Add</button>
				</div>
			</form>
		</div>	
	</div>
</body>
</html>