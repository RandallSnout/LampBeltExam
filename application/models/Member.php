<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {

	public function validateAppt($post) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date', "Date", "trim|required");
		$this->form_validation->set_rules('time', "Time", "trim|required");
		$this->form_validation->set_rules('task', "Task", "trim|required");
	    $errors = array();
	    if ($post['date'] < date('Y-m-d')) {
	      $errors[] = 'Please enter a future date';
	    } 

	    if ($post['date'] > date('Y-m-d') || $post['date'] == date('Y-m-d')) {
	    	if ($post['time'] < date('G:i:s')) {
	    		$errors[] = 'Please enter a future time';
	    	}
	    } 
	    if (!$this->form_validation->run()) {
	      $errors[] = validation_errors();
	    }
	    if (count($errors)) {
	      return $errors;
	    } else {
	      return "valid";
	    }	
	}

	public function pullFutureAppt() {
		$id = $this->session->userdata('id');
		$today = Date('Y-m-d');
		$query = "SELECT * FROM appointments WHERE date > ? AND users_id = ?";
        $value = array($today, $id);
		return  $this->db->query($query, $value)->result_array();
	}

  	public function pullTodaysAppt() {
  		$id = $this->session->userdata('id');
		$today = Date('Y-m-d');
	    $query = "SELECT * FROM appointments WHERE date = ? AND users_id = ?";
	    $value = array($today, $id);
	    return $this->db->query($query, $value)->result_array();
  	}

	public function insertAppt($post) {
		$query="INSERT INTO appointments (task, status, date, time, created_at, updated_at, users_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($post['task'], 'Pending', $post['date'], $post['time'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $this->session->userdata('id'));
		return $this->db->query($query, $values);
	}

	public function singleAppt($id) {
		$query ="SELECT * FROM appointments WHERE id = ?";
		return $this->db->query($query, $id)->row_array();
	}

	public function removeAppt($apptID) {
		$query = "DELETE FROM appointments WHERE id = ?";
		return $this->db->query($query, $apptID);
	}


	public function updateAppt($post) {
		$query = "UPDATE appointments SET task = ?, status = ?, date = ?, time = ?, updated_at = now() WHERE id = ?";
		$values = array($post['task'], $post['status'], $post['date'], $post['time'], $post['id']);
		return $this->db->query($query, $values);
	}
 }