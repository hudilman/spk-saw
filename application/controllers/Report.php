<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	private $folderName = "report";

	function __construct() {
        parent::__construct();
        $this->load->model('Resident_Model');
        $this->load->model('Payment_Model');
        $this->load->model('User_Model');
        $this->load->model('Report_Model');
    }

	public function index() {

		if($this->session->userdata('token') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

		$project 	= $this->input->get('project');
		$regency 	= $this->input->get('regency');
		$village 	= $this->input->get('village');
		$from_date 	= $this->input->get('from_date');
		$to_date 	= $this->input->get('to_date');
		if($from_date != "" && $to_date != ""){
			$report = $this->Report_Model->get_report_search($project,$regency,$village,$from_date,$to_date);
			// echo "search";
		}else{
			$report = $this->Report_Model->get_report();
			// echo "hello";
		}
		$benefisiery_paid = $this->Report_Model->benefisiery_paid($project,$regency,$village,$from_date,$to_date);
		$benefisiery_amount_paid = $this->Report_Model->benefisiery_amount_paid($project,$regency,$village,$from_date,$to_date);
		$list_project = $this->Report_Model->get_project_name();
		$list_regency = $this->Report_Model->get_regency_name();
		$list_village = $this->Report_Model->get_village_name();
		$data = [
			"folder_name"	=> $this->folderName,
			"file_name"		=> "report",
			"list"			=> $report,
			"list_project"	=> $list_project,
			"regency"		=> $list_regency,
			"village"		=> $list_village,
			"benefisiery_paid"=> $benefisiery_paid,
			"benefisiery_amount_paid"=> $benefisiery_amount_paid,
		];
		

		$this->load->view('partials/templates', $data);
	}

	public function detail($token){
		if($this->session->userdata('token') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

		$report_detail = $this->Report_Model->report_detail($token);
		// echo "<pre>";
		// print_r($project_summary);
		// exit();
		$data = [
			"folder_name"	=> $this->folderName,
			"file_name"		=> "detail",
			"list"			=> $report_detail,
		];
		

		$this->load->view('partials/templates', $data);
	}
	
}
