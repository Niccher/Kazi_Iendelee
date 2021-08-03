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



$route['reseller'] = 'reseller';
$route['reseller/home'] = 'reseller';
$route['reseller/dashboard'] = 'reseller';

$route['reseller/orders'] = 'reseller/orders';
$route['reseller/orders/pending'] = 'reseller/orders_pending';
$route['reseller/orders/completed'] = 'reseller/orders_completed';
$route['reseller/orders/view'] = 'reseller/orders_view';

$route['reseller/invoices'] = 'reseller/invoices';
$route['reseller/sales'] = 'reseller/sales';
$route['reseller/mail'] = 'reseller/mails';
$route['reseller/mail/read'] = 'reseller/mails_read';

$route['client'] = 'client';
$route['client/home'] = 'client';
$route['client/dashboard'] = 'client';

$route['client/orders'] = 'client/orders';
$route['client/orders/pending'] = 'client/orders_pending';
$route['client/orders/completed'] = 'client/orders_completed';
$route['client/orders/view'] = 'client/orders_view';
$route['client/orders/add'] = 'client/orders_create';

$route['client/invoices'] = 'client/invoices';
$route['client/sales'] = 'client/sales';
$route['client/mail'] = 'client/mails';
$route['client/mail/read'] = 'client/mails_read';

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
