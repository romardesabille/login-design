<?php
//Home default page
$route->get('', 'Login/index');

$route->post('login', 'Login/authenticate');

$route->get('dashboard', 'Dashboard/index');
?>