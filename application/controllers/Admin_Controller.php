<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	
	function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');
    }

    // Alternative Menu Start
	public function alternative() {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        $list = $this->Admin_Model->find_alternative_all();

		$data = [
			"folder_name"	=> "alternative",
			"file_name"		=> "alternative",
			"list"			=> $list,
		];

		$this->load->view('partials/templates', $data);
	}


	public function alternative_post() {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

		$name = $this->input->post('name');

		$this->form_validation->set_rules('name','Device Name','required');


		if($this->form_validation->run() != false) {

            $data_insert = array(
                'name'  =>$name,
            );

			if($this->Admin_Model->alternative_post($data_insert) ){
                $this->session->set_flashdata('success', "New Alternative Added successfully");
			    redirect($this->agent->referrer());
            }else{
                $this->session->set_flashdata('error', "Alternative failed to add");
			    redirect($this->agent->referrer());
            }
		} else {
            $this->session->set_flashdata('error', "Form Required!");
            redirect($this->agent->referrer());
		}
	}

	public function alternative_update() {
        if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        $id = $this->input->post('id');
		$name = $this->input->post('name');

        $this->form_validation->set_rules('id','Id Alternative','required');
		$this->form_validation->set_rules('name','Name Alternative','required');

		if($this->form_validation->run() != false) {

            $data_insert = array(
                'name'  =>$name,
            );


			if($this->Admin_Model->alternative_update($id,$data_insert) ){
                $this->session->set_flashdata('success', "Alternative update successful");
			    redirect($this->agent->referrer());
            }else{
                $this->session->set_flashdata('error', "Alternative update failed");
			    redirect($this->agent->referrer());
            }
		} else {
            $this->session->set_flashdata('error', "Form Required!");
            redirect($this->agent->referrer());
		}
	}

	public function alternative_delete($id) {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        if($this->Admin_Model->alternative_delete($id)){
            $this->session->set_flashdata('success', "Data was removed!");
			redirect($this->agent->referrer());
        }else{
            $this->session->set_flashdata('error', "Invalid data!");
			redirect($this->agent->referrer());
        }
	}

    // Alternative Menu End

    // Criteria Menu Start
	public function criteria() {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        $list = $this->Admin_Model->find_criteria_all();

		$data = [
			"folder_name"	=> "criteria",
			"file_name"		=> "criteria",
			"list"			=> $list,
		];

		$this->load->view('partials/templates', $data);
	}


	public function criteria_post() {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

		$criteria   = $this->input->post('criteria');
        $weight     = $this->input->post('weight');
        $attribute  = $this->input->post('attribute');

		$this->form_validation->set_rules('criteria','criteria','required');
        $this->form_validation->set_rules('weight','weight','required');
        $this->form_validation->set_rules('attribute','attribute','required');


		if($this->form_validation->run() != false) {

            $data_insert = array(
                'criteria'  =>$criteria,
                'weight' =>$weight,
                'attribute' =>$attribute
            );

			if($this->Admin_Model->criteria_post($data_insert) ){
                $this->session->set_flashdata('success', "New Criteria Added successfully");
			    redirect($this->agent->referrer());
            }else{
                $this->session->set_flashdata('error', "Criteria failed to add");
			    redirect($this->agent->referrer());
            }
		} else {
            $this->session->set_flashdata('error', "Form Required!");
            redirect($this->agent->referrer());
		}
	}

	public function criteria_update() {
        if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        $id         = $this->input->post('id');
		$criteria   = $this->input->post('criteria');
        $weight     = $this->input->post('weight');
        $attribute  = $this->input->post('attribute');

        $this->form_validation->set_rules('id','id','required');
		$this->form_validation->set_rules('criteria','criteria','required');
        $this->form_validation->set_rules('weight','weight','required');
        $this->form_validation->set_rules('attribute','attribute','required');

		if($this->form_validation->run() != false) {

            $data_insert = array(
                'criteria'  =>$criteria,
                'weight' =>$weight,
                'attribute' =>$attribute
            );


			if($this->Admin_Model->criteria_update($id,$data_insert) ){
                $this->session->set_flashdata('success', "Criteria update successful");
			    redirect($this->agent->referrer());
            }else{
                $this->session->set_flashdata('error', "Criteria update failed");
			    redirect($this->agent->referrer());
            }
		} else {
            $this->session->set_flashdata('error', "Form Required!");
            redirect($this->agent->referrer());
		}
	}

	public function criteria_delete($id) {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        if($this->Admin_Model->criteria_delete($id)){
            $this->session->set_flashdata('success', "Data was removed!");
			redirect($this->agent->referrer());
        }else{
            $this->session->set_flashdata('error', "Invalid data!");
			redirect($this->agent->referrer());
        }
	}
	
	// Criteria Menu End

	// Evaluation Menu Start

	public function evaluation() {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        $criteria = $this->Admin_Model->find_criteria_all();
		$alternative = $this->Admin_Model->find_alternative_all();
		$evaluations_list = $this->Admin_Model->find_evaluations_all();

		$data = [
			"folder_name"	=> "evaluation",
			"file_name"		=> "evaluation",
			"criteria"		=> $criteria,
			"alternative"	=> $alternative,
			"evaluations_list"=> $evaluations_list
		];

		$this->load->view('partials/templates', $data);
	}

	public function evaluation_post() {
		// Periksa apakah sesi pengguna masih aktif
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}
	
		$dataJson = $this->input->post('dataJson');
		$data_arr = json_decode(stripslashes($dataJson));
	
		// Inisialisasi array untuk menyimpan data evaluasi
		$evaluationData = array();
	
		foreach ($data_arr as $val) {
			// var_dump($val->name);
			var_dump($val->value);
	
			// Pecah nama menjadi id_criteria dan id_alternative
			$exp = explode('[', $val->name);
			$replace_exp = str_replace(']', '', $exp);
	
			// var_dump($replace_exp[1]);
			$id_criteria = $replace_exp[1];
			$id_alternative = $replace_exp[2];
			$value = $val->value;
	
			// Tambahkan data ke dalam array evaluasi
			$evaluationData[] = array(
				'id_criteria' => $id_criteria,
				'id_alternative' => $id_alternative,
				'value' => $value,
			);
		}
	
		// Kirim data evaluasi ke model untuk disimpan
		if ( $this->Admin_Model->evaluation_post($evaluationData)) {
			$response = array(
				"message" => "success",
				"code" => 200
			);
			echo json_encode($response);
		} else {
			$response = array(
				"message" => "error",
				"code" => 400
			);
			echo json_encode($response);
		}
	}

	public function report() {
		if($this->session->userdata('username') == null) {
			$this->session->set_flashdata('error', "Session has expired!");
			redirect("/");
		}

        $criteria = $this->Admin_Model->find_criteria_all();
		$alternative = $this->Admin_Model->find_alternative_all();
		$evaluations_list = $this->Admin_Model->find_evaluations_all();

		$alternatif=array();
		foreach($alternative as $row){
			$alternatif[$row->id_alternative]=$row->name;
		}

		$kriteria=array();
		$w=array();
		foreach($criteria as $row){
			$kriteria[$row->id_criteria]=array($row->criteria,$row->attribute);
			@$w[]=$row->weight;
		}

		$X = array();
		$min_j = array();
		$max_j = array();
		foreach($evaluations_list->result() as $val_eval){
			$j = $val_eval->id_criteria;
			$v = $val_eval->value;

			// Inisialisasi nilai minimum dan maksimum jika belum ada
			if (!isset($min_j[$j])) {
				$min_j[$j] = $v;
			}
			if (!isset($max_j[$j])) {
				$max_j[$j] = $v;
			}

			// Update nilai minimum dan maksimum
			$min_j[$j] = ($min_j[$j] > $v) ? $v : $min_j[$j];
			$max_j[$j] = ($max_j[$j] < $v) ? $v : $max_j[$j];

			// Isi matriks keputusan X
			$X[$val_eval->id_alternative][$j] = $v;
		}

		$R=array();
		foreach($X as $i=>$x_i){

			$R[$i]=array();

			foreach($x_i as $j=>$x_ij){


				if($kriteria[$j][1]=='cost'){
					$R[$i][$j]=$min_j[$j]/$x_ij;
					
				}else{
					$R[$i][$j]=$x_ij/$max_j[$j];
				}
			}
		}

		$P=array();
		foreach($R as $i=>$r_i){
			
			$P[$i]=0;
			foreach($r_i as $j=>$r_ij){
				@$P[$i]+=$w[$j]*$r_ij;
			}
		}

		// var_dump($R);
		// exit();
		$data = [
			"folder_name"	=> "report",
			"file_name"		=> "report",
			"matriks"		=> $R,
			"preferensi"	=> $P,
			"criteria"		=> $criteria,
			"alternative"	=> $alternative,
			"evaluations_list"=> $evaluations_list,
			"kesimpulan"=> $alternatif,
		];

		$this->load->view('partials/templates', $data);
	}

}
