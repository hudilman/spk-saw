<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $folderName = "dashboard";

	function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_Model');
    }

	public function index() {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		} 
		$count_alternative = $this->Dashboard_Model->count_alternative();
		$count_criteria = $this->Dashboard_Model->count_criteria();
		$data = [
			"folder_name"	=> $this->folderName,
			"file_name"		=> "admin",
			"count_alternative"	=> $count_alternative,
			"count_criteria"	=> $count_criteria
		];	

		$this->load->view('partials/templates', $data);
	}

}
