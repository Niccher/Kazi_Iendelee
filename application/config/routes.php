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
$route['admin/orders/create'] = 'adminorders/orders_create';
$route['admin/orders/make'] = 'adminorders/orders_make';
$route['orders/completed'] = 'adminorders/completed';
$route['orders/pending'] = 'adminorders/pending';
$route['orders/view/(:any)'] = 'adminorders/view';
$route['admin/orders/attachment/(:any)'] = 'adminorders/orders_get_attachment';
$route['admin/orders_make_attachment'] = 'adminorders/orders_make_attachment';
$route['admin/fetch_attachment_ui'] = 'adminorders/orders_make_attachment_ui';
$route['admin/fetch_attached_ui'] = 'adminorders/fetch_attached_ui';
$route['admin/attachment_delete/(:any)'] = 'adminorders/orders_attachment_delete/$1';
$route['admin/attachment_deleted/(:any)'] = 'adminorders/orders_attachment_deleted/$1';
$route['order/deleted/(:any)'] = 'adminorders/orders_deleted/$1';
$route['admin/order/edit/(:any)'] = 'adminorders/orders_edit/$1';
$route['admin/order/edit_make/(:any)'] = 'adminorders/orders_make_edit/$1';
$route['admin/assign/(:any)'] = 'adminorders/assign';

$route['admin/orders_make_submission_attachment'] = 'adminorders/orders_make_submission_attachment';
$route['admin/orders_submission_ui'] = 'adminorders/orders_make_submission_ui';
$route['admin/attachment_submission/delete/(:any)'] = 'adminorders/orders_delete_submission';
$route['admin/send_submission/(:any)'] = 'adminorders/send_submission';
$route['admin/orders_submission_chats/(:any)'] = 'adminorders/get_submission_convo';
$route['admin/orders/get_submission/(:any)'] = 'adminorders/order_get_submission';

$route['admin/orders/complete/(:any)'] = 'adminorders/order_finalize';
//admin/orders_submission_chats/

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



$route['writer'] = 'writer';
$route['writer/(:any)'] = 'writer';
$route['writer/(:any)/home'] = 'writer';
$route['writer/(:any)/dashboard'] = 'writer';

$route['writer/(:any)/orders'] = 'writer_orders/orders';
$route['writer/(:any)/orders/pending'] = 'writer_orders/orders_pending';
$route['writer/(:any)/orders/completed'] = 'writer_orders/orders_completed';
$route['writer/(:any)/orders/view/(:any)'] = 'writer_orders/orders_view';
$route['writer/(:any)/orders/attachment/(:any)'] = 'writer_orders/orders_get_attachment/$2';

$route['writer/(:any)/orders/accept/(:any)'] = 'writer_orders/make_accept';
$route['writer/(:any)/orders/reject/(:any)'] = 'writer_orders/make_accept';
$route['writer/(:any)/orders_make_order_attachment'] = 'writer_orders/orders_make_attachment';
$route['writer/(:any)/orders_submission_ui'] = 'writer_orders/orders_make_attachment_ui'; 
$route['writer/(:any)/attachment_delete/(:any)'] = 'writer_orders/orders_attachment_delete';

$route['writer/(:any)/invoices'] = 'writer/invoices';
$route['writer/(:any)/sales'] = 'writer/sales';
$route['writer/(:any)/mails'] = 'writer/mails';
$route['writer/(:any)/mail/read'] = 'writer/mails_read';

$route['writer/(:any)/profile'] = 'writer_profile/profile';
$route['writer/(:any)/profile_make'] = 'writer_profile/profile_make';
$route['writer/(:any)/add_post'] = 'writer_profile/add_post';
$route['writer/(:any)/profile_image'] = 'writer_profile/profile_image'; 
$route['writer/(:any)/send_message/(:any)'] = 'writer/send_message'; 
$route['writer/(:any)/send_submission/(:any)'] = 'writer/send_submission'; 
$route['writer/(:any)/user_fetch/(:any)'] = 'writer/user_fetch'; 
$route['writer/(:any)/orders/submision/(:any)'] = 'writer_orders/orders_get_submission'; 
$route['writer/(:any)/orders_submission_chats/(:any)'] = 'writer_orders/orders_get_submission_chats'; 

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
$route['buyer/(:any)/orders/delete/(:any)'] = 'client_orders/delete';
$route['buyer/(:any)/orders/edit/(:any)'] = 'client_orders/order_edit'; 
$route['buyer/(:any)/orders/edit_id/(:any)'] = 'client_orders/orders_make_edit_change'; 

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