<?php
require_once 'src/sections.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'listado':
        showListado();
        break;
    case 'filtro':
        if (isset($params[1])) {
            showFiltrado($params[1]);
        } else {
            showFiltrado();
        }
        break;
    case 'figura':
        if (isset($params[1])) {
            showFigura($params[1]);
        } else {
            showFigura();
        }
        break;
    default:
        echo 'error!';
        break;
}


