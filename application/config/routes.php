<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = 'pages';

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



$route['seller'] = 'reseller';
$route['seller/(:any)'] = 'reseller';
$route['seller/(:any)/home'] = 'reseller';
$route['seller/(:any)/dashboard'] = 'reseller';

$route['seller/(:any)/orders'] = 'reseller/orders';
$route['seller/(:any)/orders/pending'] = 'reseller/orders_pending';
$route['seller/(:any)/orders/completed'] = 'reseller/orders_completed';
$route['seller/(:any)/orders/view'] = 'reseller/orders_view';

$route['seller/(:any)/invoices'] = 'reseller/invoices';
$route['seller/(:any)/profile'] = 'reseller/profile';
$route['seller/(:any)/sales'] = 'reseller/sales';
$route['seller/(:any)/mails'] = 'reseller/mails';
$route['seller/(:any)/mail/read'] = 'reseller/mails_read';

$route['buyer/'] = 'client';
$route['buyer/(:any)'] = 'client';
$route['buyer/(:any)/home'] = 'client';
$route['buyer/(:any)/dashboard'] = 'client';

$route['buyer/(:any)/orders'] = 'client/orders';
$route['buyer/(:any)/orders/pending'] = 'client/orders_pending';
$route['buyer/(:any)/orders/completed'] = 'client/orders_completed';
$route['buyer/(:any)/orders/view'] = 'client/orders_view';
$route['buyer/(:any)/orders/add'] = 'client/orders_create';
$route['buyer/(:any)/orders/create'] = 'client/orders_make';
$route['buyer/(:any)/orders_make_attachment'] = 'client/orders_make_attachment';

$route['buyer/(:any)/invoices'] = 'client/invoices';
$route['buyer/(:any)/profile'] = 'client/profile';
$route['buyer/(:any)/sales'] = 'client/sales';
$route['buyer/(:any)/mail'] = 'client/mails';
$route['buyer/(:any)/mails'] = 'client/mails';
$route['buyer/(:any)/mail/read'] = 'client/mails_read';
$route['buyer/(:any)/profile_make'] = 'client/profile_make';
$route['buyer/(:any)/add_post'] = 'client/add_post';
$route['buyny)/profile_ier/(:amage'] = 'client/profile_image'; 

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
