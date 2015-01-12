        <span class="clearfix"></span>

        <!--footer start-->
        <footer id="footer" class="site-footer">
            <div class="text-center">
                2014/2015 - Made by We-Help
                <a href="index.php#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>

        <!--footer end-->         
    </section>
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
</body>
</html>
