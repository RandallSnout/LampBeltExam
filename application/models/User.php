<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
  
  public function register($post) {
    $query = "INSERT INTO users (name, email, password, date_birth, created_at, updated_at)
              VALUES (?,?,?,?,now(),now())";
    $values = array($post['name'], $post['email'], md5($post['password']), $post['dateOfBirth']);
    $id = $this->db->insert_id($this->db->query($query, $values));
    return $this->find($id);
  }
  public function find($id) {
    return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
  }
  public function validate($post) {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[password_check]');
    $this->form_validation->set_rules('password_check', 'Password Confirmation', 'trim|required');
    $this->form_validation->set_rules('dateOfBirth', 'Date of Birth', 'trim|required');
    $errors = array();
    if ($post['dateOfBirth'] > date('Y-m-d')) {
      $errors[] = 'Please enter a valid birthdate';
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

  public function login($post) {
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $values = array($post['email'], md5($post['password']));
    return $this->db->query($query, $values)->row_array();
  }

  public function loginValidate($post) {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
    if($this->form_validation->run()) {
      return "valid";
    } else {
    return array(validation_errors());
    }
  }
}