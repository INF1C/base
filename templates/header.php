<!DOCTYPE html>
<html lang="NL">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Stenden E-Help :: <?= PAGE_NAME ?></title>

        <!-- Bootstrap core CSS -->
        <link href="/base/templates/subCss/bootstrap.css" rel="stylesheet">

        <!--External CSS-->
        <link href="/base/templates/subCss/font-awesome/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/base/templates/subCss/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="/base/templates/subCss/style.css" />
        <link rel="stylesheet" type="text/css" href="/base/templates/subCss/style-responsive.css" />
        <link rel="stylesheet" type="text/css" href="/base/templates/subCss/bootstrap-datetimepicker.min.css" />   

        <!--Favicon-->
        <link rel="icon" href="/favicon" type="image/png">
    </head>
    <body>
        <section id="container" >

            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>

                <!--logo start-->
                <a href="/" class="logo"><b>Stenden eHelp</b></a>

                <!--logo end-->
                <div class="nav notify-row" id="top_menu">

                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="/logout">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none; margin-left: 0px;">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <?php
                        if($_SESSION['autorisatie'] !== 'Bedrijfsmedewerker'){
                        $db = new db;
                        $db->db_table = "MEDEWERKER";
                        $afbeelding = $db->select(array('Afbeelding'), array('Gebruikersnaam' => $_SESSION['gebruikersnaam']))[0]['Afbeelding'];
                        $db = NULL;
                        ?>
                        <p class="centered"><img src="<?= $afbeelding ?>" alt="avatar" style="max-width: 50%" class="center-block img-responsive img-circle" onError="this.onerror=null;this.src='https://cdn2.iconfinder.com/data/icons/danger-problems/512/anonymous-512.png';"/></p>
                        <?php
                        }
                        ?>
                        <h3 class="centered"><?= $_SESSION['gebruikersnaam'] ?></h3>
                        <h5 class="centered"><?= $_SESSION['autorisatie'] ?></h5>

                        <li class="mt">
                            <a class="" href="/">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <?php
                        if($_SESSION['autorisatie'] === "Medewerker" OR $_SESSION['autorisatie'] === "Teamleider" OR $_SESSION['autorisatie'] === "Admin") {
                        ?>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-cogs"></i>
                                <span>Instellingen</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/instellingen/autorisatie/">Autorisatie</a></li>
                                <li><a  href="/instellingen/afbeelding/">Afbeelding wijzigen</a></li>
                                <li><a  href="/wijzigen/wachtwoord/">Wijzig uw wachtwoord</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu"> 
                            <a href="javascript:;">
                                <i class="fa fa-cogs"></i>
                                <span>Admin</span>
                            </a>
                            <ul class="sub">
                                <li><a href="/beheerderspaneel/verwijder/bedrijfsmedewerker/">Verwijder bedrijfsmedewerker</a></li>
                                <li><a href="/beheerderspaneel/verwijder/bedrijf/">Verwijder bedrijf</a></li>
                                <li><a href="/beheerderspaneel/verwijder/medewerker/">Verwijder medewerker</a></li>
                                <li><a href="/beheerderspaneel/verwijder/faq/">Verwijder FAQ</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-dashboard"></i>
                                <span>Beheerderspaneel</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/beheerderspaneel/medewerker/">Medewerker</a></li>
                                <li><a  href="/beheerderspaneel/bedrijfsmedewerker/">Bedrijfsmedewerker</a></li>
                                <li><a  href="/beheerderspaneel/bedrijf/">Bedrijf</a></li>
                                <li><a  href="/beheerderspaneel/ticket/">Maak nieuwe ticket</a></li>
                                <li><a  href="/beheerderspaneel/faq/">FAQ</a></li>
                                <li><a  href="/beheerderspaneel/wachtwoord/">Wachtwoord</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-book"></i>
                                <span>Rapporten</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/rapporten/tickets/">Tickets</a></li>
                                <li><a  href="/rapporten/tickets/open/">Niet behandelde & open tickets</a></li>
                                <li><a  href="/rapporten/tickets/oplostijd/">Oplostijd van tickets</a></li>
                                <li><a  href="/rapporten/ticket/">Enkele Ticket</a></li>
                                <li><a  href="/rapporten/bedrijfsmedewerker/">Bedrijfsmedewerker</a></li>
                                <li><a  href="/rapporten/bedrijf/">Een bedrijf</a></li>
                            </ul>
                        </li>
                        <?php
                        }
                        if($_SESSION['autorisatie'] === "Bedrijfsmedewerker" OR $_SESSION['autorisatie'] === "Admin"){
                        ?>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-th"></i>
                                <span>Klantpaneel</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="<?= $_SESSION['autorisatie'] == 'Bedrijfsmedewerker' ? '/klantpaneel/faq/' : '/beheerderspaneel/faq/' ?>">FAQ Bekijken</a></li>
                                <li><a  href="<?= $_SESSION['autorisatie'] == 'Bedrijfsmedewerker' ? '/klantpaneel/ticket/' : '/beheerderspaneel/ticket/' ?>">Ticket indienen</a></li>
                                <li><a  href="<?= $_SESSION['autorisatie'] == 'Bedrijfsmedewerker' ? '/klantpaneel/ticketingediend/' : '" onclick="alert(\'Sorry bro, you cant do this as a admin. You are not god\')' ?>">Ingediende tickets bekijken</a></li>
                                <li><a  href="/wijzigen/wachtwoord/">Wachtwoord Wijzigen</a></li>
                                <li><a  href="<?= $_SESSION['autorisatie'] == 'Bedrijfsmedewerker' ? '/klantpaneel/contactgegevensedit/' : '" onclick="alert(\'Sorry bro, you cant do this as a admin. You are not god\')' ?>">Contactgegevens Wijzigen</a></li>
                            </ul>
                        </li>
                        <?php
                        }
						if($_SESSION['autorisatie'] === "Medewerker" OR $_SESSION['autorisatie'] === "Teamleider" OR $_SESSION['autorisatie'] === "Admin") {
                        ?>
                        <!-- <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-wrench"></i>
                                <span>Wijzigen</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/wijzigen/wachtwoord/">Wachtwoord</a></li>
                                <li><a  href="#">Contactgegevens*</a></li>
                                <li><a  href="#">Status ticket*</a></li>
                            </ul>
                        </li> -->
                        <?php
                    	}
                    	?>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->     
            <section id="main-content">
                <section class="wrapper main-chart">