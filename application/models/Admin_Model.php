<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function find_alternative_all() {
        $this->db->select('*');
        $this->db->from('saw_alternatives');
        return $this->db->get()->result();
    }

    public function alternative_post($data) {        
        return $this->db->insert('saw_alternatives', $data);
    }

    public function alternative_update($id, $data) {

        $this->db->where('id_alternative', $id);
        return $this->db->update('saw_alternatives', $data);
    }

    public function alternative_delete($id) {

        $this->db->where('id_alternative', $id);
        return $this->db->delete('saw_alternatives');
    }

    public function find_criteria_all() {
        $this->db->select('*');
        $this->db->from('saw_criterias');
        
        return $this->db->get()->result();
    }

    public function criteria_post($data) {        
        return $this->db->insert('saw_criterias', $data);
    }

    public function criteria_update($id, $data) {

        $this->db->where('id_criteria', $id);
        return $this->db->update('saw_criterias', $data);
    }

    public function criteria_delete($id) {

        $this->db->where('id_criteria', $id);
        return $this->db->delete('saw_criterias');
    }

    public function evaluation_post($data) {        
        return $this->db->insert_batch('saw_evaluations', $data);
    }

    public function evaluation_delete() {
        return $this->db->delete('saw_evaluations');
    }

    
    public function find_evaluations_all() {
        $this->db->select('*');
        $this->db->from('saw_evaluations');
        return $this->db->get();
    }

    public function get_value_evaluation($id_alternative,$id_criteria) {
        $this->db->select('*');
        $this->db->from('saw_evaluations');
        $this->db->where('id_alternative',$id_alternative);
        $this->db->where('id_criteria',$id_criteria);
        return $this->db->get();
    }


}