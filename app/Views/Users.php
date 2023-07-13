<?= $this->extend('partials/layouts') ?>

<!-- <?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?> -->

<?= $this->section('main') ?>

        <?= $this->include('partials/navbar') ?>
        <?= $this->include('partials/sidebar') ?>
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Control Panel</a></li>
				<li class="breadcrumb-item active">Users</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Users</h1>
			<!-- END page-header -->
			
		</div>
		<!-- END #content -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
<?= $this->endSection() ?>
