<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->output->enable_profiler();
		date_default_timezone_set('America/Los_Angeles');
		$this->load->model('User');
	}
	public function index(){
		$this->load->view('home');
	}
	public function userBoard(){
		$this->session->userdata($id);
		$data['plans'] = $this->User->pullTrips();
		$this->load->view('board', $data);
	}
	public function register() {
	    $this->load->model('User');
	    $result = $this->User->validate($this->input->post());
	    if($result == "valid") {
	      $id = $this->User->register($this->input->post());
	      $data['plans'] = $this->User->pullTrips();
	      $this->load->view('board', $id, $data);
	    } else {
	      $errors = array(validation_errors());
	      $this->session->set_flashdata('errors', $errors);
	      redirect('/');
	    }
	}
	public function login() {
	    $this->load->model('User');
	    $result = $this->User->loginValidate($this->input->post());
	    if($result == "valid") {
	      $user = $this->User->login($this->input->post());
	      if($user){
	      	$this->session->set_userdata($user);
	  		$this->load->view('board', $user);
	      }
	      else {
	      	$errors2 = array('No such user exists. Try retyping your info or registering');
	      	$this->session->set_flashdata('errors2', $errors2);
			redirect('/');
	      }
	    } 
	    else {
	      $errors2 = array(validation_errors());
	      $this->session->set_flashdata('errors2', $errors2);
	      redirect('/');
	    }
	}
	public function user($id) {
		$this->load->view('profile');
	}
	public function addTrip($id) {
		$this->load->view('addTravel', $id);
	}
	public function tripProf($destination) {
		$data['trip'] = $this->Product->pullTrip($destination);
		$this->load->view('profile', $data);
	}
	public function postTravel() {
		$this->load->model('User');
	    $result = $this->User->validateTrip($this->input->post());
	    if($result == "valid") {
	      $trip = $this->User->addTrips($this->input->post());
	      $this->load->view('board', $trip);
	    } else {
	      $errors3 = array(validation_errors());
	      $this->session->set_flashdata('errors3', $errors3);
	      $this->load->view('addTravel');
	    }
	}
	public function kill() {
        $this->session->sess_destroy();
        redirect('/');
    }
}