<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin';
$route['admin/home'] = 'admin';

$route['admin/users'] = 'adminusers';
$route['users/sellers'] = 'adminusers/sellers';
$route['users/buyers'] = 'adminusers/buyers';
$route['users/view'] = 'adminusers/view';

$route['admin/orders'] = 'adminorders';
$route['orders/completed'] = 'adminorders/completed';
$route['orders/pending'] = 'adminorders/pending';
$route['orders/view'] = 'adminorders/view';

$route['admin/mails'] = 'adminmails';
$route['mails/read'] = 'adminmails/read';

$route['auth/login'] = 'auth/login';
$route['auth/register'] = 'auth/register';
$route['auth/forgot'] = 'auth/forgot';
$route['auth/reset'] = 'auth/reset';
$route['auth/logout'] = 'auth/logout';
$route['auth/activate'] = 'auth/activate';
$route['auth/locked'] = 'auth/locked';
$route['auth/home'] = 'auth/home';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
