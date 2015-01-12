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

        <!--Favicon-->
        <link rel="icon" href="/favicon" type="image/png">
    </head>
    <body>
        <section id="container" >

            <!--header start-->
            <header class="header black-bg">

                <!--logo start-->
                <a href="index.php" class="logo"><b>Stenden eHelp</b></a>

                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                </div>

            </header>
            <!--header end-->

            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none; margin-left: 0px;">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered"><a href="profile.html"></a></p>
                        <h5 class="centered">[Gebruikersnaam]</h5>

                        <li class="mt">
                            <a class="active" href="index.php">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-cogs"></i>
                                <span>Instellingen</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="#">Systeeminstellingen</a></li>
                                <li><a  href="#">Autorisatie</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-dashboard"></i>
                                <span>Gebruikerspaneel</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="#">Contactpersoon</a></li>
                                <li><a  href="#">Medewerker</a></li>
                                <li><a  href="#">Bedrijfsmedewerker</a></li>
                                <li><a  href="#">Ticket</a></li>
                                <li><a  href="#">FAQ</a></li>
                                <li><a  href="#">Wachtwoord</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-book"></i>
                                <span>Rapporten</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="#">Tickets</a></li>
                                <li><a  href="#">Niet Behandelde Incidenten</a></li>
                                <li><a  href="#">Alle Incidenten</a></li>
                                <li><a  href="#">Alle Incidenten in een bepaalde periode</a></li>
                                <li><a  href="#">Oplostijd van incidenten</a></li>
                                <li><a  href="#">Enkele Ticket</a></li>
                                <li><a  href="#">Bedrijfsmedewerker</a></li>
                                <li><a  href="#">Een bedrijf</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-th"></i>
                                <span>Klantpaneel</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="#">FAQ Bekijken</a></li>
                                <li><a  href="#">Ticket indienen/wijzigen</a></li>
                                <li><a  href="#">Ingediende tickets bekijken</a></li>
                                <li><a  href="#">Wachtwoord Wijzigen</a></li>
                                <li><a  href="#">Contactgegevens Wijzigen</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-wrench"></i>
                                <span>Wijzigen</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="#">Wachtwoord</a></li>
                                <li><a  href="#">Contactgegevens</a></li>
                                <li><a  href="#">Status ticket</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->     
            <section id="main-content">
                <section class="wrapper">
                    <div id="login-page">
                        <div class="container">

                            <form class="form-login" action="index.html">
                                <h2 class="form-login-heading">sign in now</h2>
                                <div class="login-wrap">
                                    <input type="text" class="form-control" placeholder="User ID" autofocus>
                                    <br>
                                    <input type="password" class="form-control" placeholder="Password">
                                    <label class="checkbox">
                                        <span class="pull-right">
                                            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>

                                        </span>
                                    </label>
                                    <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                                    <hr>

                                    <div class="login-social-link centered">
                                        <p>or you can sign in via your social network</p>
                                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                                    </div>
                                    <div class="registration">
                                        Don't have an account yet?<br/>
                                        <a class="" href="#">
                                            Create an account
                                        </a>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Forgot Password ?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Enter your e-mail address below to reset your password.</p>
                                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                                            </div>
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                                <button class="btn btn-theme" type="button">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal -->

                            </form>	  	
                        </div>
                    </div>
                </section>

                <span class="clearfix"></span>

                <!--footer start-->
                <footer id="footer" class="site-footer">
                    <div class="text-center">
                        2014/2015 - Made by We-Help
                    </div>
                </footer>

                <!--footer end-->         
            </section>
            <!-- De scripts zijn onder de code geplaatst, zodat deze sneller gelezen kunnen worden. -->
            <script src="/base/templates/subCss/js/jquery.js"></script>
            <script src="/base/templates/subCss/js/jquery-1.8.3.min.js"></script>
            <script src="/base/templates/subCss/js/bootstrap.min.js"></script>
            <script class="include" type="text/javascript" src="/base/templates/subCss/js/jquery.dcjqaccordion.2.7.js"></script>
            <script src="/base/templates/subCss/js/jquery.scrollTo.min.js"></script>
            <script src="/base/templates/subCss/js/jquery.nicescroll.js" type="text/javascript"></script>

            <!--common script for all pages-->
            <script src="/base/templates/subCss/js/common-scripts.js"></script>	

            <!--script voor de kalender, deze kan later verwijderd worden.-->
            <script type="application/javascript">
                $(document).ready(function () {
                $("#date-popover").popover({html: true, trigger: "manual"});
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                $(this).hide();
                });

                $("#my-calendar").zabuto_calendar({
                action: function () {
                return myDateFunction(this.id, false);
                },
                action_nav: function () {
                return myNavFunction(this.id);
                },
                ajax: {
                url: "show_data.php?action=1",
                modal: true
                },
                legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
                ]
                });
                });

                function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
                }
            </script>
        </section>
    </body>
</html>
