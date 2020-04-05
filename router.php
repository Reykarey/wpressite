<?php
$controller = 'Base';

switch($_SERVER['REQUEST_URI']) {
case '/':
        $controller = 'Home';
        break;
case '/book':
        $controller = 'Book';
        break;
case '/book/store':
        $controller = 'BookStore';
}
