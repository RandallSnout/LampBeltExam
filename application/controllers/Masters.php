<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters extends CI_Controller {

	public function user($id) {
		$this->load->view('profile');
	}
	public function kill() {
        $this->session->sess_destroy();
        redirect('/');
    }
}