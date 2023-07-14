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
		<li class="breadcrumb-item active">Data Permissions</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header mt-2">Roles Manager</h1>
	<!-- END page-header -->
	<!-- table  -->
	<div class="row">
		<div class="col-md-12 ">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th> Roles Name </th>
						<th> Roles Source</th>
						<th> Description</th>
						<th class=""> Read </th>
						<th> Write </th>
						<th> Update </th>
						<th> Delete </th>
						<th> Date Created </th>
						<th> Date Modified </th>
					</tr>
				</thead>
				<tbody>





					<tr class="table-active">
						<td>
							1
						</td>
						<td> Admin</td>
						<td> main.roles.admin</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>01/01/2001</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="">
						<td>
							1
						</td>
						<td> Guest </td>
						<td> main.roles.guest</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>13/07/2003</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td> Moderator </td>
						<td> main.roles.0x001</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>12/05/2013</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="">
						<td>
							1
						</td>
						<td> Viewer </td>
						<td> main.roles.0x002</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>10/01/2013</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td> Editor </td>
						<td> main.roles.0x003 </td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>13/01/2021</td>
						<td>13/07/2023</td>
					</tr>
					
					
				</tbody>
			</table>
			<button type="button" class="btn btn-md btn-primary float-end">
				Apply</button>
		</div>
	</div>
	<!-- End Tables -->

</div>
<!-- END #content -->
<!-- BEGIN scroll-top-btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i
		class="fa fa-angle-up"></i></a>
<!-- END scroll-top-btn -->
</div>
<!-- END #app -->
<?= $this->endSection() ?>
