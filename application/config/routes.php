<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news'] = 'news';
$route['news/(:any)'] = 'news/view/$parameter';

$route['default_controller'] = 'halaman/view';
$route['(:any)'] = 'halaman/view/$parameter';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
