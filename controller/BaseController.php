<?php
// Default values --->
$title = 'Page not found';
$view = '404';
// <----

$data['errors'] = $_SESSION['errors'];
unset($_SESSION['errors']);
