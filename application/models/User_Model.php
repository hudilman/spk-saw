<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_user($name,$username, $pass, $token, $role,$logo) {
        $created_at = date('Y-m-d H:i:s');

        $data = array(
            'name' => $name,
            'username' => $username,
            'phone' => $username,
            'pass' => $pass,
            'token' => $token,
            'role' => $role,
            'created_at' => $created_at,
            'logo'=>$logo
        );
        
        return $this->db->insert('user', $data);
    }

    public function update_user($username, $token,$data) {
        $this->db->where('username', $username);
        $this->db->where('token', $token);
        $this->db->set($data);
        return $this->db->update('user');
    }

    public function update_user_wo_pass($phone, $token,$data) {
        $this->db->where('phone', $phone);
        $this->db->where('token', $token);
        $this->db->set($data);
        return $this->db->update('user');
    }

    public function delete_user($token) {
        $data = array(
            'stat' => 'disabled',
        );

        $this->db->where('token', $token);
        $this->db->set($data);
        return $this->db->update('user');
    }

    public function find_user_all() {
        $this->db->select();
        $this->db->from('user');
        $this->db->where('stat', 'active');
        $this->db->where_in('role', ['admin', 'partner']);
        return $this->db->get()->result();
    }

    public function find_user_by_phone($username) {
        $this->db->select();
        $this->db->from('user');
        $this->db->where('stat', 'active');
        $this->db->where_in('role', ['admin', 'partner']);
        $this->db->where('username', $username);
        $this->db->limit(1);
        // print_r($this->db->last_query()); 
        return $this->db->get()->result();
    }

    public function find_university() {
        $this->db->select();
        $this->db->from('user');
        $this->db->where('stat', 'active');
        $this->db->where('role', 'university');
        // print_r($this->db->last_query()); 
        return $this->db->get()->result();

        
    }

    public function find_user_by_token($token) {
        $this->db->select();
        $this->db->from('user');
        $this->db->where('token', $token);
        $this->db->limit(1);
        return $this->db->get()->result();
    }

    public function find_user_by_id($id) {
        $this->db->select();
        $this->db->from('user');
        $this->db->where('stat', 'active');
        $this->db->where('id', $id);
        $this->db->limit(1);
        return $this->db->get()->result();
    }

    public function find_user_by_like($q) {
        $this->db->select();
        $this->db->from('user');
        $this->db->where('stat', 'active');
        $this->db->like('name', $q);
        $this->db->or_like('phone', $q);
        // echo "<pre>";
        // var_dump( $this->db ); die;
        return $this->db->get()->result();
    }

    public function find_user_login($username, $pass) {
        $this->db->select();
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $this->db->limit(1);
        return $this->db->get()->result();
    }

    public function update_last_login($token) {
        $data = array(
            'last_login' => date('Y-m-d H:i:s')
        );

        $this->db->where('token', $token);
        $this->db->set($data);
        return $this->db->update('user');
    }

    public function get_project_name() {
        $this->db->select('token_project,name_project');
        $this->db->from('project');
        return $this->db->get()->result();
    }

    public function cek_old_pass($token,$pass){
        $this->db->select('token,pass');
        $this->db->from('user');
        $this->db->where('token', $token);
        $this->db->where('pass', $pass);
        return $this->db->get()->result();
    }

    public function update_password($token,$data) {
        $this->db->where('token', $token);
        $this->db->set($data);
        return $this->db->update('user');
    }

    public function get_data_agent($token){
        $this->db->select('token_project');
        $this->db->from('agent');
        $this->db->where('token_agent', $token);
        $this->db->limit(1);
        return $this->db->get();
    }
}