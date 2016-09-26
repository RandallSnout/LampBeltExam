<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {

	public function validateTrip($post) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('destination', 'Destination', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('startDate', 'Start Date', 'required');
		$this->form_validation->set_rules('endDate', 'End Date', 'required');
			if($this->form_validation->run()) {
			return "valid";
			} else {
			return array(validation_errors());
			}
	}

	public function pullOtherTrips() {
		$query = "SELECT name, schedule.id, schedule.destination, schedule.start_date, schedule.end_date 
				FROM users 
				JOIN schedule ON users.id = schedule.users_id
				WHERE users.id NOT IN ( ? )";
        $value = $this->session->userdata('id');
		return  $this->db->query($query, $value)->result_array();
	}

  	public function pullMyTrips() {
	    $query = "SELECT name,schedule.id, schedule.destination, schedule.plan, schedule.start_date, schedule.end_date 
				FROM users 
				JOIN schedule ON users.id = schedule.users_id
				WHERE users.id = ?";
	    $value = $this->session->userdata('id');
	    return $this->db->query($query, $value)->result_array();
  	}

  	// public function pullMyTrips() {
	  //   $query = "SELECT name, schedule.destination, schedule.plan, schedule.start_date, schedule.end_date
			// 	FROM users 
			// 	JOIN users_schedule ON users.id = users_schedule.users_id
			// 	JOIN schedule ON schedule.id = users_schedule.schedule_id
			// 	WHERE users.id = ?";
	  //   $value = $this->session->userdata('id');
	  //   return $this->db->query($query, $value)->result_array();
  	// }

	public function insertTrip($post) {
		$query="INSERT INTO schedule (destination, plan, start_date, end_date, created_at, updated_at, users_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($post['destination'], $post['description'], $post['startDate'], $post['endDate'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $this->session->userdata('id'));
		return $this->db->query($query, $values);
	}

	public function pullTrip($id) {
		$query = "SELECT name, schedule.destination, schedule.plan, schedule.start_date, schedule.end_date 
				FROM users 
				JOIN schedule ON users.id = schedule.users_id
				WHERE schedule.id = ?";
		return $this->db->query($query, $id)->row_array();
	}

	function usersJoining($id) {
		$query = "SELECT users.name
				FROM schedule
				JOIN users ON schedule.id = users.schedule_id
				WHERE schedule.id = ?";
		return $this->db->query($query, $id)->result_array();
	}

	function joiner($id) {
		$query = "INSERT INTO users_schedule (users_id, schedule_id) VALUES (?, ?)";
		$values = array($this->session->userdata('id'), $id);
		return $this->db->query($query, $values);
	}
 }