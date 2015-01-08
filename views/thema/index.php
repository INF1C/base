<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Stenden E-Help</title>

    <!-- Bootstrap core CSS -->
    <link href="/base/templates/subCss/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/base/templates/subCss/font-awesome/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/base/templates/subCss/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/base/templates/subCss/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/base/templates/subCss/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="/base/templates/subCss/style.css" rel="stylesheet">
    <link href="/base/templates/subCss/style-responsive.css" rel="stylesheet">

    <script src="/base/templates/subCss/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Stenden E-Help</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                       
                    <!-- settings end -->

                    
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none; margin-left: 0px;">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"></a></p>
              	  <h5 class="centered">Lesley Jordan van Oostenrijk</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Instellingen</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">Systeeminstellingen</a></li>
                          <li><a  href="#">Autorisatie</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Toevoegen/<br />
							  Wijzigen/<br />
							  Verwijderen</span>
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
						  <li><a  href="#">Alle Incidenten in bepaalde periode</a></li>
						  <li><a  href="#">Oplostijd van incidenten</a></li>
						  <li><a  href="#">Enkele Ticket</a></li>
						  <li><a  href="#">Bedrijfsmedewerker</a></li>
						  <li><a  href="#">Een bedrijf</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
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
                          <i class="fa fa-th"></i>
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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
					  
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Panel 1</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Panel 1</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Panel 1</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	

                    </div><!-- /row -->
                   
				    <div class="row">

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Panel 4</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
						
						
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Panel 5</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
						
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Panel 6</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
						
					</div><!-- /row -->
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->

                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->

                  
      <!--main content end-->
	  <span class="clearfix"></span>
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014/2015 - Made by We-Help
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/base/templates/subCss/js/jquery.js"></script>
    <script src="/base/templates/subCss/js/jquery-1.8.3.min.js"></script>
    <script src="/base/templates/subCss/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/base/templates/subCss/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/base/templates/subCss/js/jquery.scrollTo.min.js"></script>
    <script src="/base/templates/subCss/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/base/templates/subCss/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="/base/templates/subCss/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="/base/templates/subCss/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/base/templates/subCss/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="/base/templates/subCss/js/sparkline-chart.js"></script>    
	<script src="/base/templates/subCss/js/zabuto_calendar.js"></script>	
	
	
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
  

  </body>
</html>