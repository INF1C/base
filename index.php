<?php

/*
 * File: index.php
 * Author: Pascal Drewes
 */

// define folder names
define("DIR_CLASS", "classes/");
define("DIR_TEMPLATE", "templates/");
define("DIR_VIEW", "views/");
define("DIR_UPLOAD", "upload/");

// require the classes used in the application
require_once DIR_CLASS . 'route.class.php';     // takes care of serving the right page
require_once DIR_CLASS . 'db.class.php';        // takes care of the db connection
require_once DIR_CLASS . 'user.class.php';      // takes care of autentication
require_once DIR_CLASS . 'output.class.php';    // generates output for the views
require_once DIR_CLASS . 'create.class.php';    // proceses the forms output
require_once DIR_CLASS . 'edit.class.php';      // edit database records

// Start the router
$router = new AltoRouter();

// Map all the routes
require_once 'routes.php';

