<?php

/*
 * Theme specific files
 */


$router->map("GET", "/favicon", function () {
	require DIR_TEMPLATE . 'favicon.png';
},  "Favicon");

$router->map("GET", "/css", function () {
    require DIR_TEMPLATE . 'main.css';
}, "CSS MAIN");