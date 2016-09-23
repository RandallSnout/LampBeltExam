<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
  
  public function register($post) {
    $query = "INSERT INTO users (name, username, password, created_at, updated_at)
              VALUES (?,?,?,now(),now())";
    $values = array($post['name'], $post['username'], md5($post['password']));
    $id = $this->db->insert_id($this->db->query($query, $values));
    return $this->find($id);
  }
  public function find($id) {
    return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
  }
  public function validate($post) {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[password_check]');
    $this->form_validation->set_rules('password_check', 'Password Confirmation', 'trim|required');
    if($this->form_validation->run()) {
      return "valid";
    } else {
    return array(validation_errors());
    }
  }
  public function login($post) {
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $values = array($post['username'], md5($post['password']));
    return $this->db->query($query, $values)->row_array();
  }
  public function loginValidate($post) {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
    if($this->form_validation->run()) {
      return "valid";
    } else {
    return array(validation_errors());
    }
  }
      public function validateTrip($post) {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('destination', 'Destination', 'trim|required');
      $this->form_validation->set_rules('description', 'Description', 'trim|required|');
      $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required|');
      $this->form_validation->set_rules('end_date', 'End Date', 'trim|required|');
      if($this->form_validation->run()) {
        return "valid";
      } else {
      return array(validation_errors());
      }
  }
  // public function postTrip($post, $id) {
  //   $query = "INSERT INTO schedule (destination, plan, start_date, end_date, created_at, updated_at, users_id)
  //             VALUES (?,?,?,now(),now(), ?)";
  //   $values = array($post['destination'], $post['description'], $post['startDate'], $post['endDate'], $id ));
  //   return $this->db->insert_id($this->db->query($query, $values))->result_array;

  // }
  public function pullTrip($destination) {
      $query = "SELECT destination, plan, start_date, end_date 
                FROM schedule 
                WHERE destination = ?";
      $value = array($destination);
      $trip =  $this->db->query($query, $value)->result_array();
      return $trip;
  }
  public function pullTrips() {
      $query = "SELECT *
                FROM schedule";
      $plans =  $this->db->query($query)->result_array();
      return $plans;
  }
  public function pullMyTrips() {
    $query = "SELECT name, schedule.destination, schedule.plan, schedule.start_date, schedule.end_date 
              FROM users 
              JOIN schedule ON users.id = schedule.users_id";
    return $this->db->query($query)->result_array();
  }
  public function addTrips($post, $id) {
     $query="INSERT INTO schedule (destination, description, start_date, end_date, created_at, updated_at, users_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
     $values = array($post['destination'], $post['description'], $post['startDate'], $post['endDate'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $id);
     return $this->db->query($query, $values);
  }
}