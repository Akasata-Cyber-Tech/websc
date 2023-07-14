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
	<h1 class="page-header mt-2">Permission Manager</h1>
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
						<th> Permission Name </th>
						<th> Rules </th>
						<th> Description</th>
						<th> Read </th>
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
						<td> Full Control </td>
						<td> main.permission.fctrl</td>
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
						<td> Read &amp; Execute </td>
						<td> main.permission.rxe</td>
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
						<td> List Folder Contents </td>
						<td> main.permission.lstfldr</td>
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
						<td> Read </td>
						<td> main.permission.read</td>
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
						<td> Modify </td>
						<td> main.permission.modify </td>
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
					<tr class="">
						<td>
							1
						</td>
						<td> Write </td>
						<td> main.permission.write</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>01/01/2013</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td> Special Permission </td>
						<td> main.permission.spclprmsn</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>05/05/2000</td>
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
