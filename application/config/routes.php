<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = 'pages';

$route['admin'] = 'admin';
$route['admin/home'] = 'admin';
$route['admin/dashboard'] = 'admin';

$route['admin/users'] = 'adminusers';
$route['users/sellers'] = 'adminusers/sellers';
$route['users/buyers'] = 'adminusers/buyers';
$route['users/view'] = 'adminusers/view';
$route['admin/user_profile/(:any)'] = 'adminusers/view_profile/$1';
$route['admin/user_msg/(:any)'] = 'adminusers/send_msg/$1';
$route['admin/user_fetch/(:any)'] = 'adminusers/user_fetch/$1';
$route['admin/user_prof/(:any)'] = 'adminusers/view_profile/$1';

$route['admin/orders'] = 'adminorders';
$route['orders/completed'] = 'adminorders/completed';
$route['orders/pending'] = 'adminorders/pending';
$route['orders/view/(:any)'] = 'adminorders/view';
$route['admin/orders/attachment/(:any)'] = 'adminorders/orders_get_attachment';


$route['admin/mails'] = 'adminmails';
$route['admin/mail/all'] = 'adminmails';
$route['admin/mail/inbox'] = 'adminmails/inbox';
$route['admin/mail/sent'] = 'adminmails/sent';
$route['admin/mail/trash'] = 'adminmails/trash';
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
$route['seller/(:any)/sales'] = 'reseller/sales';
$route['seller/(:any)/mails'] = 'reseller/mails';
$route['seller/(:any)/mail/read'] = 'reseller/mails_read';

$route['seller/(:any)/profile'] = 'reseller/profile';
$route['seller/(:any)/profile_make'] = 'reseller/profile_make';
$route['seller/(:any)/add_post'] = 'reseller/add_post';
$route['seller/(:any)/profile_image'] = 'reseller/profile_image'; 
$route['seller/(:any)/send_message/(:any)'] = 'reseller/send_message'; 
$route['seller/(:any)/user_fetch/(:any)'] = 'reseller/user_fetch'; 

$route['buyer/'] = 'client';
$route['buyer/(:any)'] = 'client';
$route['buyer/(:any)/home'] = 'client';
$route['buyer/(:any)/dashboard'] = 'client';

$route['buyer/(:any)/orders'] = 'client_orders/orders';
$route['buyer/(:any)/orders/pending'] = 'client_orders/orders_pending';
$route['buyer/(:any)/orders/completed'] = 'client_orders/orders_completed';
$route['buyer/(:any)/orders/view/(:any)'] = 'client_orders/orders_view/$2';
$route['buyer/(:any)/orders/add'] = 'client_orders/orders_create';
$route['buyer/(:any)/orders/create'] = 'client_orders/orders_make';
$route['buyer/(:any)/orders_make_attachment'] = 'client_orders/orders_make_attachment';
$route['buyer/(:any)/orders/attachment/(:any)'] = 'client_orders/orders_get_attachment/$2';
$route['buyer/(:any)/orders/convo/(:any)'] = 'client_orders/orders_convo';
$route['buyer/(:any)/orders/get_convo/(:any)'] = 'client_orders/orders_get_convo';
$route['buyer/(:any)/orders/pay/(:any)'] = 'client_orders/orders_pay';

$route['buyer/(:any)/invoices'] = 'client/invoices';
$route['buyer/(:any)/profile'] = 'client/profile';
$route['buyer/(:any)/sales'] = 'client/sales';
$route['buyer/(:any)/mail'] = 'client/mails';
$route['buyer/(:any)/mails'] = 'client/mails';
$route['buyer/(:any)/mail/read'] = 'client/mails_read';
$route['buyer/(:any)/profile_make'] = 'client/profile_make';
$route['buyer/(:any)/add_post'] = 'client/add_post';
$route['buyer/(:any)/profile_image'] = 'client/profile_image'; 
$route['buyer/(:any)/send_message/(:any)'] = 'client/send_message'; 
$route['buyer/(:any)/user_fetch/(:any)'] = 'client/user_fetch'; 


$route['default_controller'] = 'pages';
$route['404_override'] = 'pages/error_404';
$route['translate_uri_dashes'] = FALSE;