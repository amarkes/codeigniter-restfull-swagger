<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;


$route['api/auth/login']['post']           = 'api/auth/login';
$route['api/auth/logout']['post']          = 'api/auth/logout';

$route['api/lista/'] = 'api/lista';
$route['api/lista/(:num)'] = 'api/lista';
//$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
//$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
