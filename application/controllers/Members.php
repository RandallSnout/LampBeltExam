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
		$todayAppt = $this->Member->pullTodaysAppt(); 
		$futureAppt = $this->Member->pullFutureAppt(); 
		$member = $this->session->userdata();
		$this->load->view('board', array('current_user' => $member, 'todays' => $todayAppt, 'futures' => $futureAppt ));
	}

	public function addAppt() {
		$result = $this->Member->validateAppt($this->input->post());
	    if($result == "valid") {
	      $appt = $this->Member->insertAppt($this->input->post());
	      redirect('/Members/home', $appt);
	    } else {
	      // $errors = array(validation_errors(), );
	      $this->session->set_flashdata('errors', $result);
	      redirect('/Members/home');
	    }
	}

	public function editAppt($id) {
		$apptInfo['info'] = $this->Member->singleAppt($id);
		$this->load->view('editAppointments', $apptInfo);
	}

	public function remove($apptID) {
		$this->Member->removeAppt($apptID);
		redirect('/Members/home');
	}

	public function update($id) {
		$post = $this->input->post();
		// var_dump($info);
		// die();
		$this->Member->updateAppt($post);
		redirect('/Members/home');
	}
	// function to logout
	public function kill() {
        $this->session->sess_destroy();
        redirect('/');
    }
}