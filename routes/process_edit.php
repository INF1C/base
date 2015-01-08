<?php

$router->map("POST|GET", "/process/edit/medewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/edit_medewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> medewerker");

$router->map("POST|GET", "/process/edit/bedrijf", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/edit_bedrijf.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Bedrijf");

$router->map("POST|GET", "/process/edit/bedrijfsmedewerker", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/edit_bedrijfsmedewerker.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Bedrijfsmedewerker");

$router->map("POST|GET", "/process/edit/ticket", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/edit_ticket.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Ticket");

$router->map("POST|GET", "/process/edit/statuswijziging", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/edit_statuswijziging.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> Status Wijziging");

$router->map("POST|GET", "/process/edit/faq", function () {
    require DIR_TEMPLATE . 'header.php';
    require "process/edit_faq.php";
    require DIR_TEMPLATE . 'footer.php';
}, "Edit -> FAQ");
