<?php

defined('BASEPATH') OR exit('No direct script access allowed');



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

| This route indicates which thecontroller class should be loaded if 

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

$route['default_controller'] = "Home";

$route['admin'] = "admin/Login";

//$route['product/(:any)'] = 'admin/login';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

/*$route['Careers/(:any)'] = 'Careers/detail/$1';*/

/*$route['Blogs/(:any)'] = 'Blogs/detail/$1';*/

/*$route['Industries/(:any)/(:any)'] = 'Industries/detail/$1/$2';

$route['Industries/(:any)'] = 'Industries/detail/$1';*/

$route['what-we-focus'] = 'About/WhatWeFocus';

$route['digital-transformation'] = 'CMS/DigitalTransformation';

$route['terms-and-conditions'] = 'CMS/TermsAndConditions';

$route['privacy-policy'] = 'CMS/PrivacyPolicy';

$route['services'] = 'Services/index';

$route['services/(:any)'] = 'Services/detail/$1';

$route['services/(:any)/(:any)'] = 'Service/index/$1/$2';

$route['industries/(:any)'] = 'Industries';

$route['industries/(:any)'] = 'Industries/detail/$1';

$route['blogs'] = 'Blogs/index';

$route['blogs/(:any)'] = 'Blogs/detail/$1';

$route['careers'] = 'Careers/index';

$route['careers/(:any)'] = 'Careers/detail/$1';

$route['contact'] = 'Contact/index';

$route['about'] = 'About';

$route['sitemap'] = 'SiteMap';




$route['404_override'] = 'custom404';
