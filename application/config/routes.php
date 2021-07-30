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

$route['admin/mails'] = 'Adminmails';
$route['mails/read'] = 'Adminmails/read';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
