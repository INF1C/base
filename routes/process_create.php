<?php

$router->map("POST|GET", "/process/create/medewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/create_medewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Process -> medewerker");

$router->map("POST|GET", "/process/create/bedrijf", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/create_bedrijf.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Process -> Bedrijf");

$router->map("POST|GET", "/process/create/bedrijfsmedewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/create_bedrijfsmedewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Process -> Bedrijfsmedewerker");

$router->map("POST|GET", "/process/create/ticket", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/create_ticket.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Process -> Ticket");

$router->map("POST|GET", "/process/create/statuswijziging", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/create_statuswijziging.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Process -> Status Wijziging");

$router->map("POST|GET", "/process/create/faq", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/create_faq.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Process -> FAQ");
