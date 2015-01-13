<?php
// make a openView function to combine header, footer and content
function openView($name, $autorisatie = NULL) {
    require DIR_TEMPLATE . 'header.php';
    if($autorisatie === NULL OR in_array($_SESSION['autorisatie'], $autorisatie) OR $_SESSION['autorisatie'] === 'Admin'){
        require DIR_VIEW . $name . ".php";
    } else {
        echo "<div class='alert alert-danger' role='alert'>U bent niet geautoriseerd om deze pagina te bekijken!</div>";
    }
    require DIR_TEMPLATE . 'footer.php';
}

/*
 * Syntax: http://altorouter.com/usage/mapping-routes.html
 */


/*
 * START DEBUGGING
 *

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

 *
 * END DEBUGGING
 */

require_once DIR_ROUTE . 'theme.php';
require_once DIR_ROUTE . 'pages.php';
require_once DIR_ROUTE . 'process.php';

// match the current page to all the routes
$page = $router->match();
if ($page && is_callable($page['target'])) {
    define("PAGE_NAME", $page['name']);
    var_dump($page['params']);
    call_user_func_array($page['target'], $page['params']);
} else {
    // no route was matched
    include '../error/404.html';
}