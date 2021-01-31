<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['assets/(:any)'] = 'assets/$1';

$route['default_controller'] = 'auth';
$route['logout'] = 'auth/logout';
$route['dashboard'] = 'dashboard';
$route['404_override'] = '';

$route['user'] = 'user';
$route['user/form'] = 'user/form';
$route['user/update/(:any)'] = 'user/update/$1';
$route['user/post'] = 'user/post';
$route['user/get/(:any)'] = 'user/get/$1';
$route['user/put/(:any)'] = 'user/put/$1';
$route['user/delete/(:any)'] = 'user/delete/$1';
$route['user/datatables'] = 'user/datatables';
$route['user/select'] = 'user/select';

$route['tribe'] = 'tribe';
$route['tribe/form'] = 'tribe/form';
$route['tribe/update/(:any)'] = 'tribe/update/$1';
$route['tribe/post'] = 'tribe/post';
$route['tribe/get/(:any)'] = 'tribe/get/$1';
$route['tribe/put/(:any)'] = 'tribe/put/$1';
$route['tribe/delete/(:any)'] = 'tribe/delete/$1';
$route['tribe/datatables'] = 'tribe/datatables';
$route['tribe/select'] = 'tribe/select';

$route['tag'] = 'tag';
//$route['tag/form'] = 'tag/form';
//$route['tag/update/(:any)'] = 'tag/update/$1';
$route['tag/post'] = 'tag/post';
$route['tag/get/(:any)'] = 'tag/get/$1';
$route['tag/put/(:any)'] = 'tag/put/$1';
$route['tag/delete/(:any)'] = 'tag/delete/$1';
$route['tag/datatables'] = 'tag/datatables';
$route['tag/select'] = 'tag/select';

$route['narasumber'] = 'speaker';
$route['narasumber/form'] = 'speaker/form';
$route['narasumber/update/(:any)'] = 'speaker/update/$1';
$route['narasumber/post'] = 'speaker/post';
$route['narasumber/get/(:any)'] = 'speaker/get/$1';
$route['narasumber/put/(:any)'] = 'speaker/put/$1';
$route['narasumber/delete/(:any)'] = 'speaker/delete/$1';
$route['narasumber/datatables'] = 'speaker/datatables';
$route['narasumber/select'] = 'speaker/select';

$route['role'] = 'role';
//$route['role/form'] = 'role/form';
//$route['role/update/(:any)'] = 'role/update/$1';
$route['role/post'] = 'role/post';
$route['role/get/(:any)'] = 'role/get/$1';
$route['role/put/(:any)'] = 'role/put/$1';
$route['role/delete/(:any)'] = 'role/delete/$1';
$route['role/datatables'] = 'role/datatables';
$route['role/select'] = 'role/select';

$route['instansi'] = 'institution';
$route['instansi/form'] = 'institution/form';
$route['instansi/update/(:any)'] = 'institution/update/$1';
$route['instansi/post'] = 'institution/post';
$route['instansi/get/(:any)'] = 'institution/get/$1';
$route['instansi/put/(:any)'] = 'institution/put/$1';
$route['instansi/delete/(:any)'] = 'institution/delete/$1';
$route['instansi/datatables'] = 'institution/datatables';
$route['instansi/select'] = 'institution/select';

$route['jabatan'] = 'occupation';
//$route['jabatan/form'] = 'occupation/form';
//$route['jabatan/update/(:any)'] = 'occupation/update/$1';
$route['jabatan/post'] = 'occupation/post';
$route['jabatan/get/(:any)'] = 'occupation/get/$1';
$route['jabatan/put/(:any)'] = 'occupation/put/$1';
$route['jabatan/delete/(:any)'] = 'occupation/delete/$1';
$route['jabatan/datatables'] = 'occupation/datatables';
$route['jabatan/select'] = 'occupation/select';

$route['bank'] = 'bank';
//$route['bank/form'] = 'bank/form';
//$route['bank/update/(:any)'] = 'bank/update/$1';
$route['bank/post'] = 'bank/post';
$route['bank/get/(:any)'] = 'bank/get/$1';
$route['bank/put/(:any)'] = 'bank/put/$1';
$route['bank/delete/(:any)'] = 'bank/delete/$1';
$route['bank/datatables'] = 'bank/datatables';
$route['bank/select'] = 'bank/select';

$route['meeting/compare/(:any)'] = 'meeting/compare/$1';

$route['meeting/form/(:any)'] = 'meeting/form/$1';
$route['meeting/update/(/:any)(:any)'] = 'meeting/update/$1/$2';
$route['meeting/post'] = 'meeting/post';
$route['meeting/get/(:any)/(:any)'] = 'meeting/get/$1/$2';
$route['meeting/put/(:any)'] = 'meeting/put/$1';
$route['meeting/delete/(:any)'] = 'meeting/delete/$1';
$route['meeting/datatables/(:any)/(:any)'] = 'meeting/datatables/$1/$2';
$route['meeting/select'] = 'meeting/select';
$route['meeting/(:any)'] = 'meeting/index/$1';