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
}, "Ticket 1");
$router->map("GET", "/ticket/[i:id]", function ($id) {
	openView("ticket/view_get", array('Bedrijfsmedewerker', 'Medewerker', 'Teamleider'), $id);
}, "Ticket 2");

// Instellingen
	// Autorisatie
	$router->map("POST|GET", "/instellingen/autorisatie/", function () {
		openView("instellingen/autorisatie", array());
	}, "Wijzigen van autorisatie");
		$router->map("GET", "/instellingen/autorisatie/edit/[:user]", function ($user) {
			openView("instellingen/edit.autorisatie", array(), $user);
		}, "Wijzigen van autorisatie1");
	// Afbeelding
	$router->map("POST|GET", "/instellingen/afbeelding/", function () {
		openView("instellingen/afbeelding", array('Medewerker', 'Teamleider'));
	}, "Wijzigen van uw afbeelding");

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
		
		// Bedrijf
	$router->map("GET", "/beheerderspaneel/bedrijf/", function () {
		openView("beheerderspaneel/bedrijf", array('Teamleider', 'Medewerker'));
	}, "Bedrijf (knoppen)");
		$router->map("GET", "/beheerderspaneel/bedrijf/nieuw/", function () {
			openView("beheerderspaneel/bedrijf/nieuw", array('Teamleider', 'Medewerker'));
		}, "Nieuw Bedrijf");
		$router->map("POST|GET", "/beheerderspaneel/bedrijf/zoek/", function () {
			openView("beheerderspaneel/bedrijf/zoek", array('Teamleider', 'Medewerker'));
		}, "Zoek Bedrijf");
		$router->map("GET", "/beheerderspaneel/bedrijf/edit/[i:id]", function ($id) {
			openView("beheerderspaneel/bedrijf/edit", array('Teamleider', 'Medewerker'), $id);
		}, "Bewerk Bedrijf");
		
		
		
		
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
		openView("klantpaneel/faq", array('Medewerker', 'Bedrijfsmedewerker', 'Teamleider'));
	}, "Klantpaneel -> faq");
		//Ticket Aanmaken/Wijzigen
	 $router->map("GET", "/klantpaneel/ticket/", function () {
		openView("klantpaneel/ticket", array('Medewerker', 'Bedrijfsmedewerker', 'Teamleider'));
	}, "Klantpaneel -> ticket");
		//Ingediende tickets bekijken
	 $router->map("GET", "/klantpaneel/ticketingediend/", function () {
		openView("klantpaneel/ticketsingediend", array('Medewerker', 'Bedrijfsmedewerker', 'Teamleider'));
	}, "Klantpaneel -> ticketbekijken");
        //Contact gegevens aanpassen
	 $router->map("GET", "/klantpaneel/contactgegevensedit/", function () {
		openView("klantpaneel/contactgegevensedit", array('Medewerker', 'Bedrijfsmedewerker', 'Teamleider'));
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
		openView("wijzigen/wachtwoord", array('Medewerker', 'Bedrijfsmedewerker', 'Teamleider'));
	}, "Wijzigen van wachtwoord");
        
// Statuswijziging
	$router->map("GET", "/ticket/statuswijziging/behandeling/[i:id]", function ($id) {
		openView("ticket/statuswijziging_behandeling", array('Medewerker', 'Teamleider'), $id);
	}, "Ticket -> Statuswijziging");
	$router->map("GET", "/ticket/statuswijziging/[i:id]", function ($id) {
		openView("ticket/statuswijziging", array('Medewerker', 'Bedrijfsmedewerker', 'Teamleider'), $id);
	}, "Ticket -> in behandeling nemen");
	$router->map("POST", "/ticket/zoekbedrijfsmedewerker/[i:id]", function ($params) {
		require DIR_VIEW . "ticket/zoekbedrijfsmedewerker.php";
	}, "Klantpaneel -> zoek");
        
// Ticket editten
$router->map("GET|POST", "/ticket/editticket/[i:id]", function ($id) {
		openView("ticket/edit_ticket", array('Medewerker', 'Teamleider', 'Teamleider'), $id);
	}, "Ticket -> Ticket bewerken");
        
        
// Admin verwijder functies
	$router->map("GET|POST", "/beheerderspaneel/verwijder/bedrijfsmedewerker/", function () {
		openView("admin/zoek_bedrijfsmedewerker", array());
	}, "Verwijder -> bedrijfsmedewerker");
	$router->map("GET", "/beheerderspaneel/verwijder/bedrijfsmedewerker/[i:id]", function ($id) {
		openView("admin/verwijder_bedrijfsmedewerker", array(), $id);
	}, "Verwijder -> Bedrijfsmedewerker.");
	$router->map("GET|POST", "/beheerderspaneel/verwijder/bedrijf/", function () {
		openView("admin/zoek_bedrijf", array());
	}, "Verwijder -> bedrijf");
	$router->map("GET", "/beheerderspaneel/verwijder/bedrijf/[i:id]", function ($id) {
		openView("admin/verwijder_bedrijf", array(), $id);
	}, "Verwijder -> bedrijf.");
	$router->map("GET|POST", "/beheerderspaneel/verwijder/medewerker/", function () {
		openView("admin/zoek_medewerker", array());
	}, "Verwijder -> Medewerker");
	$router->map("GET", "/beheerderspaneel/verwijder/medewerker/[i:id]", function ($id) {
		openView("admin/verwijder_medewerker", array(), $id);
	}, "Verwijder -> Medewerker.");
	$router->map("GET|POST", "/beheerderspaneel/verwijder/faq/", function () {
		openView("admin/zoek_faq", array());
	}, "Verwijder -> faq");
	$router->map("GET", "/beheerderspaneel/verwijder/faq/[i:id]", function ($id) {
		openView("admin/verwijder_faq", array(), $id);
	}, "Verwijder -> faq.");
	$router->map("GET", "/beheerderspaneel/verwijder/ticket/[i:id]", function ($id) {
		openView("admin/verwijder_ticket", array(), $id);
	}, "Verwijder -> ticket.");