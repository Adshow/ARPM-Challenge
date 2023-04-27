<?php
$path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

switch ($path) {
    case '/':
        $page = 'home';
        break;
    case '/folder1/':
        $page = 'folder1';
        break;
    case '/folder2/':
        $page = 'folder2';
        break;
    default:
        http_response_code(404);
        exit('Page not found');
}

require_once 'PageController.php';
$pageController = new PageController();
$pageController->$page();

