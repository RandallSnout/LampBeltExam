<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Model {
  
  public function newBook($post) {
  		$query="INSERT INTO products (title, created_at, updated_at) VALUES (?, ?, ?)";
  		$values = array($post['title'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
  		return $this->db->query($query, $values);
  }
}