<?php

// Home page
$router->map("GET", "/", function () {
    if(isset($_SESSION['loggedIn'])){
        openView('root');
    } else {
        require DIR_VIEW . 'login.php';
    }
}, "Home");


// create admin
$router->map("GET", "/CrEaTeAdMiN/", function () {
	openView("admin");
}, "CREATE ADMIN");

// Instellingen
	// Autorisatie
	$router->map("POST|GET", "/autorisatie/", function () {
		openView("instellingen/autorisatie", array());
	}, "Wijzigen van autorisatie");
		$router->map("GET", "/autorisatie/edit/[:user]", function ($user) {
			openView("instellingen/edit.autorisatie", array(), $user);
		}, "Wijzigen van autorisatie1");

// Gebruikerspaneel

	// Ticket
	$router->map("POST|GET", "/ticket/", function () {
		openView("gebruikerspaneel/ticket", array('Medewerker', 'Teamleider'));
	}, "Ticket (knoppen)");
		$router->map("POST|GET", "/ticket/nieuw/", function () {
			openView("gebruikerspaneel/ticket/nieuw", array('Medewerker', 'Teamleider'));
		}, "Nieuwe ticket");

	// Medewerker
	$router->map("GET", "/medewerker/", function () {
		openView("gebruikerspaneel/medewerker", array('Teamleider'));
	}, "Medewerker (knoppen)");
		$router->map("GET", "/medewerker/nieuw/", function () {
			openView("gebruikerspaneel/medewerker/nieuw", array('Teamleider'));
		}, "Nieuwe medewerker");
		$router->map("POST|GET", "/medewerker/zoek/", function () {
			openView("gebruikerspaneel/medewerker/zoek", array('Teamleider'));
		}, "Zoek medewerker");
		$router->map("GET", "/medewerker/edit/[i:id]", function ($id) {
			openView("gebruikerspaneel/medewerker/edit", array('Teamleider'), $id);
		}, "Bewerk medewerker");