</section>

<span class="clearfix"></span>

<!--footer start-->
<footer id="footer" class="site-footer">
    <div class="text-center">
        2014/2015 - Made by We-Help
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>

<!--footer end-->         
</section>
<!-- De scripts zijn onder de code geplaatst, zodat deze sneller gelezen kunnen worden. -->
<script src="/base/templates/subCss/js/jquery.js"></script>
<script src="/base/templates/subCss/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/base/templates/subCss/js/jquery.cookie.js"></script>
<script src="/base/templates/subCss/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/base/templates/subCss/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/base/templates/subCss/js/jquery.scrollTo.min.js"></script>
<script src="/base/templates/subCss/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="/base/templates/subCss/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/base/templates/subCss/js/fileinput.js"></script>
<!--common script for all pages-->
<script src="/base/templates/subCss/js/common-scripts.js"></script>	

<!--script voor de kalender, deze kan later verwijderd worden.-->
<script type="application/javascript">
	$(function () {
		$('#start').datetimepicker({
			autoclose: true,
        	todayBtn: true,
        	minView: '2',
        	pickerPosition: "bottom-left"
		});
		$('#stop').datetimepicker({
			autoclose: true,
        	todayBtn: true,
        	minView: '2',
        	pickerPosition: "bottom-left"
		});
	});
</script>
</section>
<!-- DUMPS ALL PHP VARIABLES DOWN HERE FOR DEBUGGING -->
<noscript>
<?php var_dump(get_defined_vars()); ?>
</body>
</html>
