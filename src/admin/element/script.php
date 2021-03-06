    <!--   Core JS Files   -->
    <script src="<?php echo asset('admin','jquery.3.2.1.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo asset('admin','bootstrap.min.js'); ?>" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo asset('admin','chartist.min.js'); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo asset('admin','bootstrap-notify.js'); ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo asset('admin','light-bootstrap-dashboard.js'); ?>"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo asset('admin','demo.js'); ?>"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-info',
            	message: "Welcome to <b>Admin Light Bootstrap Dashboard</b> - Clone by Lilyrisa (DTL)."

            },{
                type: 'info',
                timer: 2000
            });

    	});
	</script>
    <script >
tinymce.init({selector:'textarea'});
</script>