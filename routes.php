<?php
// make a openView function to combine header, footer and content
function openView($name) {
    require DIR_TEMPLATE . 'header.php';
    require DIR_VIEW . $name . ".php";
    require DIR_TEMPLATE . 'footer.php';
}

/*
 * Syntax: http://altorouter.com/usage/mapping-routes.html
 */

// Home page
$router->map("GET", "/", function () {
    openView("root");
}, "Home");

// Styling
$router->map("GET", "/css", function () {
    require DIR_TEMPLATE . 'main.css';
}, "CSS MAIN");

// Class demo
$router->map("POST|GET", "/demo/", function () {
    openView("demo");
}, "Demo");

// Search
$router->map("POST|GET", "/search/", function () {
	openView("search");
}, "Search");
// Search medewerker
$router->map("POST|GET", "/search2/", function () {
	openView("search_test");
}, "Search2");
// Search bedrijf
$router->map("POST|GET", "/search3/", function () {
	openView("search_test_bedrijf");
}, "Search3");
// Search bedrijfmw
$router->map("POST|GET", "/search4/", function () {
	openView("search_test_bedrijfmw");
}, "Search4");

/*
 * START DEBUGGING
 */

$router->map("POST|GET", "/debug/create/", function () {
    openView("debug/create");
}, "Debug -> Create");

$router->map("POST|GET", "/debug/edit/", function () {
    openView("debug/edit");
}, "Debug -> Edit");

$router->map("POST|GET", "/debug/output/", function () {
    openView("debug/output");
}, "Debug -> Output");

$router->map("POST|GET", "/debug/output/pascal", function () {
    openView("debug/output.pascal");
}, "Debug -> Output (pascal)");

/*
 * END DEBUGGING
 */

require_once 'routes/process_create.php';
require_once 'routes/process_edit.php';

// match the current page to all the routes
$page = $router->match();
if ($page && is_callable($page['target'])) {
    define("PAGE_NAME", $page['name']);
    call_user_func_array($page['target'], $page['params']);
} else {
    // no route was matched
    include '../error/404.html';
}