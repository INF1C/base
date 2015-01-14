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
        <link rel="stylesheet" type="text/css" href="/base/templates/subCss/style.css">
        <link rel="stylesheet" type="text/css" href="/base/templates/subCss/bootstrap-datetimepicker.min.css">   

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
                <a href="index.php" class="logo"><b>Stenden eHelp</b></a>

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
                        <p class="centered"><a href="profile.html"></a></p>
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
                                <li><a  href="#">Systeeminstellingen*</a></li>
                                <li><a  href="/autorisatie/">Autorisatie</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-dashboard"></i>
                                <span>Gebruikerspaneel</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="#">Contactpersoon*</a></li>
                                <li><a  href="/medewerker/">Medewerker</a></li>
                                <li><a  href="#">Bedrijfsmedewerker*</a></li>
                                <li><a href="/ticket/">Ticket</a></li>
                                <li><a  href="#">FAQ*</a></li>
                                <li><a  href="#">Wachtwoord*</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-book"></i>
                                <span>Rapporten</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/rapporten/tickets/">Tickets</a></li>
                                <li><a  href="/rapporten/tickets/open">Niet Behandelde Incidenten</a></li>
                                <li><a  href="#">Alle Incidenten*</a></li>
                                <li><a  href="#">Alle Incidenten in een bepaalde periode*</a></li>
                                <li><a  href="/rapporten/tickets/oplostijd/">Oplostijd van incidenten</a></li>
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
                                <li><a  href="#">FAQ Bekijken*</a></li>
                                <li><a  href="#">Ticket indienen/wijzigen*</a></li>
                                <li><a  href="#">Ingediende tickets bekijken*</a></li>
                                <li><a  href="#">Wachtwoord Wijzigen*</a></li>
                                <li><a  href="#">Contactgegevens Wijzigen*</a></li>
                            </ul>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-wrench"></i>
                                <span>Wijzigen</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="/wijzigen/wachtwoord/">Wachtwoord</a></li>
                                <li><a  href="#">Contactgegevens*</a></li>
                                <li><a  href="#">Status ticket*</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->     
            <section id="main-content">
                <section class="wrapper main-chart">