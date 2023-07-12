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
</head>

<body class="bg-light">

    <main role="main" class="container">
        <?= $this->renderSection('main') ?>
    </main>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
