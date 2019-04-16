<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['pages/login'] = 'pages/login';
$route['user/login'] = 'user/login';
$route['pages/product'] = 'pages/product';
$route['product/showAllEmployee'] = 'product/showAllEmployee';
$route['pages/admin_dashboard'] = 'pages/admin_dashboard';
$route['user/register'] = 'user/register';
$route['user/login'] = 'user/login';