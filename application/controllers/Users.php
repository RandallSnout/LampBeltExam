<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		date_default_timezone_set('America/Los_Angeles');
		$this->load->model('User');
	}
	public function index(){
		$this->load->view('home');
	}

	public function register() {
	    $result = $this->User->validate($this->input->post());
	    if($result == "valid") {
	      $user = $this->User->register($this->input->post());
	      $this->session->set_userdata($user);
	      redirect('/Members/home', $user);
	    } else {
	      $errors = array(validation_errors());
	      $this->session->set_flashdata('errors', $errors);
	      redirect('/');
	    }
	}
	public function login() {
	    $result = $this->User->loginValidate($this->input->post());
	    if($result == "valid") {
	      $user = $this->User->login($this->input->post());
	      if($user){
	      	$this->session->set_userdata($user);
	  		redirect('/Members/home');
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
}