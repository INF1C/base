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
       

	   
// Klantpaneel
		//FAQ Bekijken
        $router->map("GET", "/klantpaneel/faq/", function () {
		openView("klantpaneel/faq", array('Medewerker', 'Bedrijfsmedewerker'));
	}, "Klantpaneel -> faq");
		//Ticket Aanmaken/Wijzigen
	 $router->map("GET", "/klantpaneel/ticket/", function () {
		openView("klantpaneel/ticket", array('Medewerker', 'Bedrijfsmedewerker'));
	}, "Klantpaneel -> ticket");
	
	

// Rapporten
	// Tickets
	$router->map("GET", "/rapporten/tickets/", function () {
		openView("rapporten/tickets", array('Medewerker', 'Teamleider'));
	}, "Rapporten -> alle tickets");
        
	// Enkele ticket
	$router->map("GET", "/rapporten/ticket/", function () {
		openView("rapporten/ticket", array('Medewerker', 'Teamleider'));
	}, "Rapporten -> enkele ticket");
		// Open Tickets
		$router->map("GET", "/rapporten/tickets/open/", function () {
			openView("rapporten/open_tickets", array('Medewerker', 'Teamleider'));
		}, "Rapporten -> open tickets");
		// Oplostijd Tickets
		$router->map("GET", "/rapporten/tickets/oplostijd/", function () {
			openView("rapporten/oplostijd_tickets", array('Medewerker', 'Teamleider'));
		}, "Rapporten -> oplostijd tickets");
	// Bedrijf
	$router->map("GET", "/rapporten/bedrijf/", function () {
		openView("rapporten/bedrijf", array('Medewerker', 'Teamleider'));
	}, "Rapporten -> Bedrijf");
	// Bedrijfsmedewerker
	$router->map("GET", "/rapporten/bedrijfsmedewerer/", function () {
		openView("rapporten/bedrijfsmedewerker", array('Medewerker', 'Teamleider'));
	}, "Rapporten -> Bedrijfsmedewerker");

// Wijzigen
	// Wachtwoord
	$router->map("POST|GET", "/wijzigen/wachtwoord/", function () {
		openView("wijzigen/wachtwoord", array());
	}, "Wijzigen van wachtwoord");