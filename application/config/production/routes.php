<?php

defined('BASEPATH') or exit('No direct script access allowed');



/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = 'auth/controller_ctl';


// ROUTE AUTH
$route['auth']  = 'auth/controller_ctl';

$route['auth/(:any)'] = 'auth/controller_ctl/$1';

$route['auth/(:any)/(:any)'] = 'auth/controller_ctl/$1/$2';


// ROUTE USER

$route['user']  = 'user/controller_ctl';

$route['user/(:any)'] = 'user/controller_ctl/$1';

$route['user/(:any)/(:any)'] = 'user/controller_ctl/$1/$2';


$route['func_user']  = 'user/function_ctl';

$route['func_user/(:any)'] = 'user/function_ctl/$1';

$route['func_user/(:any)/(:any)'] = 'user/function_ctl/$1/$2';


// ROUTE MENU

$route['menu']  = 'menu/controller_ctl';

$route['menu/(:any)'] = 'menu/controller_ctl/$1';

$route['menu/(:any)/(:any)'] = 'menu/controller_ctl/$1/$2';


$route['func_menu']  = 'menu/function_ctl';

$route['func_menu/(:any)'] = 'menu/function_ctl/$1';

$route['func_menu/(:any)/(:any)'] = 'menu/function_ctl/$1/$2';




// ROUTE TRANSAKSI

$route['transaksi']  = 'transaksi/controller_ctl';

$route['transaksi/(:any)'] = 'transaksi/controller_ctl/$1';

$route['transaksi/(:any)/(:any)'] = 'transaksi/controller_ctl/$1/$2';


$route['func_transaksi']  = 'transaksi/function_ctl';

$route['func_transaksi/(:any)'] = 'transaksi/function_ctl/$1';

$route['func_transaksi/(:any)/(:any)'] = 'transaksi/function_ctl/$1/$2';


$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
