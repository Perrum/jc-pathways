<?php
include_once("confparser.inc.php");
include_once("permissions.inc.php");

$ROUTES = array(
    '' => 'home.php',
    '/index.php' => 'home.php',
    '/login' => 'login.php',
);

$ADMIN_PATH = '/admin';
$PATHWAY_PATH = '/pathway';
$USER_PATH = '/account';

function get_route($path) {
    global $ROUTES;

    $path = rtrim($path, '/');
    if (isset($ROUTES[$path])) {
        return $ROUTES[$path];
    } else {
        return NULL;
    }
}

function get_uri($path, $abs=false) {
    if ($abs) {
        return rtrim(pw_location(), '/') . $path;
    } else {
        return $path;
    }
}