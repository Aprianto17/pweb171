<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['blog']                  = 'blog/';            // daftar blog
$route['blog/post']             = 'blog/post';        // halaman penulisan blog
$route['blog/submit']           = 'blog/submit';      // proses penyimpanan blog
$route['blog/delete/(:any)']    = 'blog/delete/$1';   // proses menghapus blog
$route['blog/edit/(:any)']      = 'blog/edit/$1';     // proses menghapus blog
$route['blog/subedit/(:any)']   = 'blog/subedit/$1';  // proses menghapus blog
$route['blog/(:any)']           = 'blog/index/$1';    // baca blog dengan blog_id $1

$route['user/signin']           = 'user/signin';      // proses login user
$route['signout']               = 'user/signout';     // proses login user
$route['user/reg']              = 'user/register';    // halaman form registrasi user
$route['user/reg_submit']       = 'user/regsubmit';   // proses registrasi user
$route['user/login']            = 'user/login';       // halaman form login
$route['user/(:any)']           = 'user/profil/$1';   // halaman profil user dengan user_id $1

$route['comen/post']             = 'blog/post';        // halaman penulisan blog




$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
