<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->renderSection('title') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- ================== BEGIN core-css ================== -->
	<link href="<?= base_url(); ?>../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
    
	<!-- ================== BEGIN page-css ================== -->
	<link href="<?= base_url('../assets/plugins/jvectormap-next/jquery-jvectormap.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('../assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('../assets/plugins/gritter/css/jquery.gritter.css'); ?>" rel="stylesheet" />
	<!-- ================== END page-css ================== -->

	<!-- ================== BEGIN Plugin JS ================== -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.18/sweetalert2.all.min.js" integrity="sha512-mDxZdt7RiIHE1Lu4T6XmSi+jJJO+uD0gTnm2f75pQhKphTdnAeHdEPomsgXWuCnSt3rEp9MOPpttFyhG8yo6vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="<?= base_url('../assets/plugins/ionicons/dist/ionicons/ionicons.js'); ?>"></script>

	<!-- ================== END Plugin JS ================== -->


	<!-- ================== BEGIN Plugin CSS ================== -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.18/sweetalert2.min.css" integrity="sha512-yX1R8uWi11xPfY7HDg7rkLL/9F1jq8Hyiz8qF4DV2nedX4IVl7ruR2+h3TFceHIcT5Oq7ooKi09UZbI39B7ylw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- ================== END Plugin CSS ================== -->

</head>

<body class="bg-light">

    <main role="main">
        <?= $this->renderSection('main') ?>
    </main>

<!-- ================== BEGIN core-js ================== -->
<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/plugins/flot/source/jquery.canvaswrapper.js"></script>
	<script src="../assets/plugins/flot/source/jquery.colorhelpers.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.saturated.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.browser.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.drawSeries.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.uiConstants.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.time.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.resize.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.pie.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.crosshair.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.categories.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.navigate.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.touchNavigate.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.hover.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.touch.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.selection.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.symbol.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.legend.js"></script>
	<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="../assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="../assets/plugins/jvectormap-content/world-mill.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/demo/dashboard.js"></script>
	<!-- ================== END page-js ================== -->

	<!-- Data Tables -->
	
		
</body>
</html>