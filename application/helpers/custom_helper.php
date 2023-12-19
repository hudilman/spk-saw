<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Custom Helpers
 *
 */
if (!function_exists('cek_budget')) {
    function cek_budget($token)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('Agent_Model');
        return $ci->Agent_Model->find_budget_by_token($token);
    }
}

if (!function_exists('is_login')) {
    function is_login($is_true = false)
    {
        $CI =& get_instance();
        if (!@$CI->session->is_login && !$is_true) {
            redirect('/');
        } elseif ($CI->session->is_login && $is_true) {
            redirect('dashboard');
        }

        return;
    }
}

if (!function_exists('is_role')) {
    function is_role($role)
    {
        $CI =& get_instance();
        if ($CI->session->role == $role) {
            return true;
        }

        return false;
    }
}

if (!function_exists('redirect_if_role_not')) {
    function redirect_if_role_not($role)
    {
        $CI =& get_instance();
        $is_match = false;
        if (is_array($role)) {
            if (in_array($CI->session->role, $role)) {
                $is_match = true;
            }
        } else {
            $is_match = is_role($role);
        }

        if (!$is_match) {
            return redirect('dashboard/');
        }

        return;
    }
}

if (!function_exists('get_project')) {
    function get_project()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('User_Model');
        return $ci->User_Model->get_project_name();
    }
}

if (!function_exists('cek_status_pay')) {
    function cek_status_pay($token_resident)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('Payment_Model');
        return $ci->Payment_Model->cek_status_pay($token_resident);
    }
}

if (!function_exists('cek_benefisiery')) {
    function cek_benefisiery($token_project,$token_resident)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('Project_Model');
        $cek = $ci->Project_Model->cek_benefisiery($token_project,$token_resident);
        if($cek > 0){
            return 'checked';
        }else{
            return '';
        }
        
    }
}

if (!function_exists('get_project_by_nik')) {
    function get_project_by_nik($nik)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('Resident_Model');
        return $ci->Resident_Model->get_project_by_nik($nik);
        
    }
}

if (!function_exists('is_checked_project')) {
    function is_checked_project($token_project,$token_resident)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('Resident_Model');
        $cek = $ci->Resident_Model->is_checked_project($token_project,$token_resident);
        if($cek > 0){
            return 'checked';
        }else{
            return '';
        }
        
    }
}

if (!function_exists('get_bind_by_token')) {
    function get_bind_by_token($token)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('Resident_Model');
        return $ci->Resident_Model->get_bind_by_token($token);
        
    }
}

if (!function_exists('get_value_evaluation')) {
    function get_value_evaluation($id_alternative,$id_criteria)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('Admin_Model');
        $data = $ci->Admin_Model->get_value_evaluation($id_alternative,$id_criteria);
        if($data->num_rows() > 0){
            foreach ($data->result() as $val){
                return $val->value;
            }
        }else{
            return "0";
        }

        
        
    }
}