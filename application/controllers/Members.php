<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set('America/Los_Angeles');
		$this->load->model('Member');
	}

	// Set up redirect to home page in order to get all data from tables to go into the page
	public function home() {
		$myTrips = $this->Member->pullMyTrips();
		$otherTrips = $this->Member->pullOtherTrips(); 
		$member = $this->session->userdata();
		$this->load->view('board', array('current_user' => $member, 'userTrips' => $myTrips, 'otherTrips' => $otherTrips ));
	}

	// Redirect for trip addition page
	public function addTrip() {
		$this->load->view('addTravel');
	}

	// code to validate and post new trip information
	public function postTravel() {
		$result = $this->Member->validateTrip($this->input->post());
	    if($result == "valid") {
	      $trip = $this->Member->insertTrip($this->input->post());
	      redirect('/Members/home', $trip);
	    } else {
	      $errors3 = array(validation_errors());
	      $this->session->set_flashdata('errors3', $errors3);
	      redirect('/Members/addTrip');
	    }
	}

	// Direct to trip profile page with info for the trip and the joiners
	public function tripProfile($id) {
		$trip = $this->Member->pullTrip($id);
		$joiners = $this->Member->usersJoining($id);
		$this->load->view('profile', array('trip' => $trip, 'joiners' => $joiners));
	}

	public function join($id) {
		$this->Member->joiner($id);
		redirect('/Members/home');
	}	

	// function to logout
	public function kill() {
        $this->session->sess_destroy();
        redirect('/');
    }
}