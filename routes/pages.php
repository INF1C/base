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

// beheerderspaneel

	// Ticket
	$router->map("POST|GET", "/ticket/", function () {
		openView("beheerderspaneel/ticket", array('Medewerker', 'Teamleider'));
	}, "Ticket (knoppen)");
		$router->map("POST|GET", "/ticket/nieuw/", function () {
			openView("beheerderspaneel/ticket/nieuw", array('Medewerker', 'Teamleider'));
		}, "Nieuwe ticket");
	// Medewerker
	$router->map("GET", "/medewerker/", function () {
		openView("beheerderspaneel/medewerker", array('Teamleider'));
	}, "Medewerker (knoppen)");
		$router->map("GET", "/medewerker/nieuw/", function () {
			openView("beheerderspaneel/medewerker/nieuw", array('Teamleider'));
		}, "Nieuwe medewerker");
		$router->map("POST|GET", "/medewerker/zoek/", function () {
			openView("beheerderspaneel/medewerker/zoek", array('Teamleider'));
		}, "Zoek medewerker");
		$router->map("GET", "/medewerker/edit/[i:id]", function ($id) {
			openView("beheerderspaneel/medewerker/edit", array('Teamleider'), $id);
		}, "Bewerk medewerker");
	// Bedrijfsmedewerker
	$router->map("GET", "/bedrijfsmedewerker/", function () {
		openView("beheerderspaneel/bedrijfsmedewerker", array('Teamleider', 'Medewerker'));
	}, "Bedrijfsmedewerker (knoppen)");
		$router->map("GET", "/medewerker/nieuw/", function () {
			openView("beheerderspaneel/bedrijfsmedewerker/nieuw", array('Teamleider', 'Medewerker'));
		}, "Nieuwe Bedrijfsmedewerker");
		$router->map("POST|GET", "/medewerker/zoekbedrijf/", function () {
			openView("beheerderspaneel/bedrijfsmedewerker/zoekbedrijf", array('Teamleider', 'Medewerker'));
		}, "Zoek Bedrijfsmedewerker");
		$router->map("POST|GET", "/medewerker/zoek/", function () {
			openView("beheerderspaneel/bedrijfsmedewerker/zoek", array('Teamleider', 'Medewerker'));
		}, "Zoek Bedrijfsmedewerker.");
		$router->map("GET", "/medewerker/edit/[i:id]", function ($id) {
			openView("beheerderspaneel/bedrijfsmedewerker/edit", array('Teamleider', 'Medewerker'), $id);
		}, "Bewerk Bedrijfsmedewerker");

	   
// Klantpaneel
		//FAQ Bekijken
        $router->map("GET", "/klantpaneel/faq/", function () {
		openView("klantpaneel/faq", array('Medewerker', 'Bedrijfsmedewerker'));
	}, "Klantpaneel -> faq");
		//Ticket Aanmaken/Wijzigen
	 $router->map("GET", "/klantpaneel/ticket/", function () {
		openView("klantpaneel/ticket", array('Medewerker', 'Bedrijfsmedewerker'));
	}, "Klantpaneel -> ticket");
		//Ingediende tickets bekijken
	 $router->map("GET", "/klantpaneel/ticketingediend/", function () {
		openView("klantpaneel/ticketsingediend", array('Medewerker', 'Bedrijfsmedewerker'));
	}, "Klantpaneel -> ticketbekijken");
			//Wachtwoord wijzigen
	 $router->map("GET", "/klantpaneel/wachtwoord/", function () {
		openView("klantpaneel/wachtwoord", array('Medewerker', 'Bedrijfsmedewerker'));
	}, "Klantpaneel -> wachtwoord");
	

// Rapporten
	// Tickets
	$router->map("POST|GET", "/rapporten/tickets/", function () {
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