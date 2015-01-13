<?php

// LOGIN
$router->map("POST", "/", function () {
    require DIR_PROCES . "login.php";
}, "Login");

// LOGOUT
$router->map("GET", "/logout", function () {
    require DIR_PROCES . "logout.php";
}, "Logout");

// CREATE
$router->map("POST|GET", "/process/create/medewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "create_medewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Create -> Medewerker");

$router->map("POST|GET", "/process/create/bedrijf", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "create_bedrijf.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Create -> Bedrijf");

$router->map("POST|GET", "/process/create/bedrijfsmedewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "create_bedrijfsmedewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Create -> Bedrijfsmedewerker");

$router->map("POST|GET", "/process/create/ticket", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "create_ticket.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Create -> Ticket");

$router->map("POST|GET", "/process/create/statuswijziging", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "create_statuswijziging.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Create -> Status Wijziging");

$router->map("POST|GET", "/process/create/faq", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "create_faq.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Create -> FAQ");


// EDIT
$router->map("POST|GET", "/process/edit/medewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "edit_medewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Medewerker");

$router->map("POST|GET", "/process/edit/bedrijf", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "edit_bedrijf.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Bedrijf");

$router->map("POST|GET", "/process/edit/bedrijfsmedewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "edit_bedrijfsmedewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Bedrijfsmedewerker");

$router->map("POST|GET", "/process/edit/ticket", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "edit_ticket.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Ticket");

$router->map("POST|GET", "/process/edit/statuswijziging", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "edit_statuswijziging.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Status Wijziging");

$router->map("POST|GET", "/process/edit/faq", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "edit_faq.php";
    require DIR_TEMPLATE . 'footer.php';
},  "Edit -> FAQ");

$router->map("POST|GET", "/process/edit/autorisatie", function () {
    require DIR_TEMPLATE . 'header.php';
    require DIR_PROCES . "edit_autorisatie.php";
    require DIR_TEMPLATE . 'footer.php';
},  "Edit -> Autorisatie");
