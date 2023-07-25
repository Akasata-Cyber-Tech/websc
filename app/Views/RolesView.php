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
			<button type="button" class="btn btn-md btn-primary float-end ">
				Apply</button>
			<button type="button" class="btn btn-md btn-secondary float-end me-3" onClick="Add()">
				Add</button>
			
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
<script>

	function Add() {
		Swal.fire({
  title: 'Edit User',
  html: `<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-4">
            Role Name :
        </div>
        <div class="col-md-4">
            <input type="text" id="RoleName" class="form-control fs-15px" placeholder="Role Name" value="Admin">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-4">
            Role Source :
        </div>
        <div class="col-md-4">
			<select id="RoleSource class="form-control fs-15px" name="RoleSource">
				<option value="main.roles.admin">Admin</option>
				<option value="main.roles.moderator">Moderator</option>
				<option value="main.roles.viewer">Viewers</option>
				<option value="main.roles.guest">Guest</option>
			</select>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-4">
            Description :
        </div>
        <div class="col-md-4">
            <textarea id="RoleDesc" class="form-control fs-15px" placeholder="Deskripsikan Rolenya" value="This Role....."></textarea>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-4">
            Privillege :
        </div>
        <div class="col-md-4">
            <input type="text" id="Privillege" class="form-control fs-15px" placeholder="Isi Dengan rwx" value="777">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div><br>`,
  cancelButtonText: 'Cancel',
  confirmButtonText: 'Apply',
  showCancelButton: true,
  focusConfirm: false,
  preConfirm: () => {
    const Username = Swal.getPopup().querySelector('#Username').value
    const Role = Swal.getPopup().querySelector('#Role').value

    // const password = Swal.getPopup().querySelector('#password').value
    if (!Username || !Role) {
      Swal.showValidationMessage(`Please enter Username and Role`)
    }
    return { Username: Username, Role: Role }
  }
}).then((result) => {
  Swal.fire(`
    Username: ${result.value.Username}
    Role: ${result.value.Role}
  `.trim())
})
	}
	

</script>
<!-- END #app -->
<?= $this->endSection() ?>
