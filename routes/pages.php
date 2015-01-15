<?php

// Home page
$router->map("GET", "/", function () {
    if(isset($_SESSION['loggedIn'])){
        openView('root');
    } else {
        require DIR_VIEW . 'login.php';
    }
}, "Home");

// Enkele ticket
$router->map("POST", "/ticket/", function () {
	openView("ticket/view_post", array('Bedrijfsmedewerker', 'Medewerker', 'Teamleider'));
}, "Ticket");

// Instellingen
	// Autorisatie
	$router->map("POST|GET", "/instellingen/autorisatie/", function () {
		openView("instellingen/autorisatie", array());
	}, "Wijzigen van autorisatie");
		$router->map("GET", "/instellingen/autorisatie/edit/[:user]", function ($user) {
			openView("instellingen/edit.autorisatie", array(), $user);
		}, "Wijzigen van autorisatie1");

// beheerderspaneel

	// Ticket
	$router->map("POST|GET", "/beheerderspaneel/ticket/", function () {
		openView("beheerderspaneel/ticket/zoek", array('Medewerker', 'Teamleider'));
	}, "Ticket -> zoek bedrijfsmedewerker");
		$router->map("POST|GET", "/beheerderspaneel/ticket/create/[i:id]", function ($id) {
			openView("beheerderspaneel/ticket/create", array('Medewerker', 'Teamleider'), $id);
		}, "Nieuwe ticket");
	// Medewerker
	$router->map("GET", "/beheerderspaneel/medewerker/", function () {
		openView("beheerderspaneel/medewerker", array('Teamleider'));
	}, "Medewerker (knoppen)");
		$router->map("GET", "/beheerderspaneel/medewerker/nieuw/", function () {
			openView("beheerderspaneel/medewerker/nieuw", array('Teamleider'));
		}, "Nieuwe medewerker");
		$router->map("POST|GET", "/beheerderspaneel/medewerker/zoek/", function () {
			openView("beheerderspaneel/medewerker/zoek", array('Teamleider'));
		}, "Zoek medewerker");
		$router->map("GET", "/beheerderspaneel/medewerker/edit/[i:id]", function ($id) {
			openView("beheerderspaneel/medewerker/edit", array('Teamleider'), $id);
		}, "Bewerk medewerker");
	// Bedrijfsmedewerker
	$router->map("GET", "/beheerderspaneel/bedrijfsmedewerker/", function () {
		openView("beheerderspaneel/bedrijfsmedewerker", array('Teamleider', 'Medewerker'));
	}, "Bedrijfsmedewerker (knoppen)");
		$router->map("GET", "/beheerderspaneel/bedrijfsmedewerker/nieuw/[i:id]", function ($id) {
			openView("beheerderspaneel/bedrijfsmedewerker/nieuw", array('Teamleider', 'Medewerker'), $id);
		}, "Nieuwe Bedrijfsmedewerker");
		$router->map("POST|GET", "/beheerderspaneel/bedrijfsmedewerker/zoekbedrijf/", function () {
			openView("beheerderspaneel/bedrijfsmedewerker/zoekbedrijf", array('Teamleider', 'Medewerker'));
		}, "Zoek Bedrijfsmedewerker");
		$router->map("POST|GET", "/beheerderspaneel/bedrijfsmedewerker/zoek/", function () {
			openView("beheerderspaneel/bedrijfsmedewerker/zoek", array('Teamleider', 'Medewerker'));
		}, "Zoek Bedrijfsmedewerker.");
		$router->map("GET", "/beheerderspaneel/bedrijfsmedewerker/edit/[i:id]", function ($id) {
			openView("beheerderspaneel/bedrijfsmedewerker/edit", array('Teamleider', 'Medewerker'), $id);
		}, "Bewerk Bedrijfsmedewerker");
	// FAQ
	$router->map("GET", "/beheerderspaneel/faq/", function () {
		openView("beheerderspaneel/faq", array('Medewerker', 'Teamleider'));
	}, "FAQ");
		$router->map("GET", "/beheerderspaneel/faq/nieuw/", function () {
			openView("beheerderspaneel/faq/nieuw", array('Medewerker', 'Teamleider'));
		}, "FAQ -> Nieuw");
		$router->map("GET", "/beheerderspaneel/faq/edit/[i:id]", function ($id) {
			openView("beheerderspaneel/faq/edit", array('Medewerker', 'Teamleider'), $id);
		}, "FAQ -> Edit");
	// Wachtwoord
	$router->map("POST|GET", "/beheerderspaneel/wachtwoord/", function () {
		openView("beheerderspaneel/wachtwoord_zoek", array('Teamleider'));
	}, "Wachtwoord Reset");
		$router->map("POST|GET", "/beheerderspaneel/wachtwoord/medewerker/[i:id]", function ($id) {
			openView("beheerderspaneel/wachtwoord/medewerker", array(), $id);
		}, "Medewerker wachtwoord Reset");
		$router->map("POST|GET", "/beheerderspaneel/wachtwoord/bedrijfsmedewerker/[i:id]", function ($id) {
			openView("beheerderspaneel/wachtwoord/bedrijfsmedewerker", array('Teamleider'), $id);
		}, "Bedrijfsmedewerker wachtwoord Reset");
	   
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
        //Contact gegevens aanpassen
	 $router->map("GET", "/klantpaneel/contactgegevensedit/", function () {
		openView("klantpaneel/contactgegevensedit", array('Medewerker', 'Bedrijfsmedewerker'));
	}, "Klantpaneel -> contactgegevensedit");
	

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
	$router->map("GET|POST", "/rapporten/bedrijf/", function () {
		openView("rapporten/bedrijf_zoek", array('Medewerker', 'Teamleider'));
	}, "Rapporten -> Zoek bedrijf");
		$router->map("GET", "/rapporten/bedrijf/[i:id]", function ($id) {
			openView("rapporten/bedrijf", array('Medewerker', 'Teamleider'), $id);
		}, "Rapporten -> Bedrijf");
	// Bedrijfsmedewerker
	$router->map("GET|POST", "/rapporten/bedrijfsmedewerker/", function () {
		openView("rapporten/bedrijfsmedewerker_zoek", array('Medewerker', 'Teamleider'));
	}, "Rapporten -> Bedrijfsmedewerker zoek");
		$router->map("GET", "/rapporten/bedrijfsmedewerker/[i:id]", function ($id) {
			openView("rapporten/bedrijfsmedewerker", array('Medewerker', 'Teamleider'), $id);
		}, "Rapporten -> Bedrijfsmedewerker");

// Wijzigen
	// Wachtwoord
	$router->map("POST|GET", "/wijzigen/wachtwoord/", function () {
		openView("wijzigen/wachtwoord", array());
	}, "Wijzigen van wachtwoord");