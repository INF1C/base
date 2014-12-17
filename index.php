<?php

/*
 * Author: Pascal Drewes
 */

// define folder names
define("DIR_CLASS", "classes/");
define("DIR_TEMPLATE", "templates/");
define("DIR_VIEW", "views/");

// require the classes used in the application
require_once DIR_CLASS . 'route.class.php';     // takes care of serving the right page
require_once DIR_CLASS . 'db.class.php';        // takes care of the db connection
require_once DIR_CLASS . 'user.class.php';      // takes care of autentication
require_once DIR_CLASS . 'output.class.php';    // generates output for the views
require_once DIR_CLASS . 'create.class.php';    // proceses the forms output
require_once DIR_CLASS . 'edit.class.php';      // edit database records
// make a openView function to combine header, footer and content

function openView($name) {
    require DIR_TEMPLATE . 'header.php';
    require DIR_VIEW . $name . ".php";
    require DIR_TEMPLATE . 'footer.php';
}

// start the router
$router = new AltoRouter();

/*
 * Map all the routes
 * Syntax: http://altorouter.com/usage/mapping-routes.html
 */
$router->map("GET", "/", function () {
    openView("root");
}, "Home");

$router->map("POST|GET", "/demo/", function () {
    openView("demo");
}, "Demo");

// match the current page to all the routes
$page = $router->match();
if ($page && is_callable($page['target'])) {
    call_user_func_array($page['target'], $page['params']);
} else {
    // no route was matched
    include './error/404.html';
}