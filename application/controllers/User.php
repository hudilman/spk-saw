<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	private $folderName = "user";

	function __construct() {
        parent::__construct();
        $this->load->model('User_Model');
    }


	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username != "" && $password != "") {

			$user_data = $this->User_Model->find_user_login($username, md5($password));
			if(count($user_data) > 0) {
				$data_session = array(
					"username"=>$username,
					"is_login"=>true,
				);
				$this->session->set_userdata($data_session);
				redirect("dashboard");
			} else {
				$this->session->set_flashdata('error', 'Username and password not match!');
				redirect($this->agent->referrer());
			}
		} else {
			$this->session->set_flashdata('error', 'The form must be filled!');
			redirect($this->agent->referrer());
		}
	}


	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
