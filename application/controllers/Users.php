<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function __construct() {
	// 	parent::__construct();
	// 	// $this->output->enable_profiler();
	// 	date_default_timezone_set('America/Los_Angeles');
	// }
	public function index(){
		$this->load->view('home');
	}
	public function register() {
	    $this->load->model('User');
	    $result = $this->User->validate($this->input->post());
	    if($result == "valid") {
	      $user = $this->User->register($this->input->post());
	      $this->load->view('board', $user);
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
}