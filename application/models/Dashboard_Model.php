<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function count_alternative(){
        $this->db->select("*");
        return $this->db->get('saw_alternatives')->num_rows();
    }

    public function count_criteria(){
        $this->db->select("*");
        return $this->db->get('saw_criterias')->num_rows();
    }
}