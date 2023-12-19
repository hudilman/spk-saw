<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller']            = 'Welcome';
$route['404_override']                  = '';
$route['translate_uri_dashes']          = FALSE;

// Login
$route['user/login']                    = 'User/login';
$route['user/logout']                   = 'User/logout';

// Dashboard
$route['dashboard']                     = 'dashboard';

// Menu Alternative
$route['alternative']                   = 'Admin_Controller/alternative';
$route['alternative/post']['POST']      = 'Admin_Controller/alternative_post';
$route['alternative/update']['POST']    = 'Admin_Controller/alternative_update';
$route['alternative/delete/(:any)']     = 'Admin_Controller/alternative_delete/$1';

// Menu Criteria
$route['criteria']                      = 'Admin_Controller/criteria';
$route['criteria/post']['POST']         = 'Admin_Controller/criteria_post';
$route['criteria/update']['POST']       = 'Admin_Controller/criteria_update';
$route['criteria/delete/(:any)']        = 'Admin_Controller/criteria_delete/$1';

// Menu Evaluation
$route['evaluation']                      = 'Admin_Controller/evaluation';
$route['evaluation/post']['POST']         = 'Admin_Controller/evaluation_post';
$route['evaluation/update']['POST']       = 'Admin_Controller/evaluation_update';
$route['evaluation/delete/(:any)']        = 'Admin_Controller/evaluation_delete/$1';

$route['report']                          = 'Admin_Controller/report';
