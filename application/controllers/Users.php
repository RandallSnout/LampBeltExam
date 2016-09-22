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
	      $id = $this->User->register($this->input->post());
	      $success[] = 'Welcome! Registration was successful!';
	      $this->session->set_flashdata('success', $success);
	      redirect('/users/show/' . $id);
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
	      $id = $this->User->login($this->input->post());
	      $success2[] = 'Welcome! Login was successful!';
	      $this->session->set_flashdata('success2', $success2);
	      redirect('/users/show/' . $id['id']);
	    } else {
	      $errors2 = array(validation_errors());
	      $this->session->set_flashdata('errors2', $errors2);
	      redirect('/');
	    }
	}
	public function show($id) {
		$this->load->model('User');
    	$data['user'] = $this->User->find($id);
    	$this->load->view('board', $data);
	}
}