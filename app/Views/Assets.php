<?= $this->extend('partials/layouts') ?>

<!-- <?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?> -->

<?= $this->section('main') ?>

        <?= $this->include('partials/navbar') ?>
        <?= $this->include('partials/sidebar') ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		
		<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />

<script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
<script src="../assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../assets/plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js"></script>
<script src="../assets/plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="../assets/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/pdfmake/build/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/build/vfs_fonts.js"></script>
<script src="../assets/plugins/jszip/dist/jszip.min.js"></script>

		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
				<li class="breadcrumb-item active">Assets</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Assets</h1>
			<!-- END page-header -->
			
			<div class="panel-body">
				
					<table id="data-table-combine" class="table table-striped table-bordered align-middle">
					
						<thead>
							<tr><th colspan="9"></th><th><button type="button" onClick="" class="btn btn-md btn-primary float-end me-3">
				Apply</button><button type="button" onClick="Add()" class="btn btn-md btn-secondary float-end me-3">
				Add</button>
			</th></tr>
							<tr>
								<th width="1%">NO</th>
								<th width="1%" data-orderable="false"></th>
								<th class="text-nowrap">URL</th>
								<th class="text-nowrap">Domain</th>
								<th class="text-nowrap">IP Address</th>
								<th class="text-nowrap">Login Method</th>
								<th class="text-nowrap">Login Password</th>
								<th class="text-nowrap">CMS</th>
								<th class="text-nowrap">Engine</th>
								<th class="text-nowrap" width="11%">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-dark">1</td>
								<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pelindo.com</td>
								<td>Pelindo.com</td>
								<td>255.255.255.255</td>
								<td>GET</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="even gradeC">
								<td class="fw-bold text-dark">2</td>
								<td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pupuk.com</td>
								<td>Pupuk.com</td>
								<td>255.255.255.255</td>
								<td>POST</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-dark">1</td>
								<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pelindo.com</td>
								<td>Pelindo.com</td>
								<td>255.255.255.255</td>
								<td>GET</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="even gradeC">
								<td class="fw-bold text-dark">2</td>
								<td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pupuk.com</td>
								<td>Pupuk.com</td>
								<td>255.255.255.255</td>
								<td>POST</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-dark">1</td>
								<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pelindo.com</td>
								<td>Pelindo.com</td>
								<td>255.255.255.255</td>
								<td>GET</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="even gradeC">
								<td class="fw-bold text-dark">2</td>
								<td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pupuk.com</td>
								<td>Pupuk.com</td>
								<td>255.255.255.255</td>
								<td>POST</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-dark">1</td>
								<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pelindo.com</td>
								<td>Pelindo.com</td>
								<td>255.255.255.255</td>
								<td>GET</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="even gradeC">
								<td class="fw-bold text-dark">2</td>
								<td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pupuk.com</td>
								<td>Pupuk.com</td>
								<td>255.255.255.255</td>
								<td>POST</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-dark">1</td>
								<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pelindo.com</td>
								<td>Pelindo.com</td>
								<td>255.255.255.255</td>
								<td>GET</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="even gradeC">
								<td class="fw-bold text-dark">2</td>
								<td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pupuk.com</td>
								<td>Pupuk.com</td>
								<td>255.255.255.255</td>
								<td>POST</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-dark">1</td>
								<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pelindo.com</td>
								<td>Pelindo.com</td>
								<td>255.255.255.255</td>
								<td>GET</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="even gradeC">
								<td class="fw-bold text-dark">2</td>
								<td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pupuk.com</td>
								<td>Pupuk.com</td>
								<td>255.255.255.255</td>
								<td>POST</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-dark">1</td>
								<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pelindo.com</td>
								<td>Pelindo.com</td>
								<td>255.255.255.255</td>
								<td>GET</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							<tr class="even gradeC">
								<td class="fw-bold text-dark">2</td>
								<td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>https://pupuk.com</td>
								<td>Pupuk.com</td>
								<td>255.255.255.255</td>
								<td>POST</td>
								<td>X</td>
								<td>Wordpress</td>
								<td>PHP</td>
								<td>Active</td>
							</tr>
							
						</tbody>
						
					</table>
					
				</div>
				
			
		</div>
		
		<!-- END #content -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<script>
  var options = {
    dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex me-0 me-md-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-md-5"i><"col-md-7"p>>>',
    buttons: [
      { extend: 'copy', className: 'btn-sm' },
      { extend: 'csv', className: 'btn-sm' },
      { extend: 'excel', className: 'btn-sm' },
      { extend: 'pdf', className: 'btn-sm' },
      { extend: 'print', className: 'btn-sm' }
    ],
    responsive: true,
    colReorder: true,
    keys: true,
    rowReorder: true,
    select: true
  };

  if ($(window).width() <= 767) {
    options.rowReorder = false;
    options.colReorder = false;
  }
  $('#data-table-combine').DataTable(options);
</script>

<script>

	function Edit() {
		Swal.fire({
  title: 'Data Shell',
  html: `<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-4">
            Url :
        </div>
        <div class="col-md-4">
            <input type="text" id="Username" class="form-control fs-15px" placeholder="Admin" value="Admin">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-4">
            Domain :
        </div>
        <div class="col-md-4">
            <input type="text" id="Description" class="form-control fs-15px" placeholder="This Role..." value="This Role...">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-4">
            IP Address :
        </div>
        <div class="col-md-4">
            <input type="text" id="Role" class="form-control fs-15px" placeholder="Admin" value="Admin">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div><br>`,
  confirmButtonText: 'Apply',
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

	function Add() {
		Swal.fire({
  title: 'Data Shell',
  customClass: {
	popup: 'w-50',
  },
  html: `<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-6">
            Url :
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
        <div class="col-md-6">
            Domain :
        </div>
        <div class="col-md-4">
            <input type="text" id="RoleName" class="form-control fs-15px" placeholder="e.g Pelindo.Com" value="">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-6">
            IP Address :
        </div>
        <div class="col-md-4">
            <textarea id="RoleDesc" class="form-control fs-15px" placeholder="Masukan IP Address" value="This Role....."></textarea>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-6">
            Login Method :
        </div>
        <div class="col-md-4">
            <input type="text" id="Privillege" class="form-control fs-15px" placeholder="Isi Dengan rwx" value="Post">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div><br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-6">
            Login Password :
        </div>
        <div class="col-md-4">
            <input type="password" id="Privillege" class="form-control fs-15px" placeholder="Masukan Passwordnya" value="password">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div><br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-6">
            CMS :
        </div>
        <div class="col-md-4">
            <input type="password" id="Privillege" class="form-control fs-15px" placeholder="e.g Wordpress" value="">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div><br>
<div class="col-md-12">
  	  <div class="row">
        <div class="col-md-6">
            Engine :
        </div>
        <div class="col-md-4">
            <input type="text" id="Privillege" class="form-control fs-15px" placeholder="e.g PHP" value="">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div><br>
<div id="barisan3" class="col-md-12">
  	  <div class="row"><div class="col-md-6 "><input class="form-control fs-15px text-center" placeholder="ColumnName" name="Nama[]" required type="text"></div>
		<div class="col-md-4"><input class="form-control fs-15px" placeholder="Value" name="Nama[]" required type="text"></div>
		<div class="col-md-2"><button id="" onClick="tambahin3()" class="btn btn-success">Add More</button></div></div><br>
		
		


		
	  </div>

            	
            	
              `,
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

	function tambahin3(){
		$("#barisan3").prepend(`<div class="row"><div class="col-md-6 mb-4"><input class="form-control fs-15px text-center" placeholder="ColumnName" name="Nama[]" required type="text"></div>
		<div class="col-md-4"><input class="form-control fs-15px" placeholder="Value" name="Nama[]" required type="text"></div>
		<div class="col-md-1"><button id="kurangin" class="btn btn-danger">-</button></div><div class="col-md-1"><button id="" onClick="tambahin3()" class="btn btn-success">+</button></div></div>`);
	}
	
	function tambahin3_child(){
      	$("#barisan3").prepend(`<div class="d-flex gap-2 inputan">
            		<input class="input" placeholder="ColumnName" name="Nama[]" required type="text">
          <input class="input" placeholder="Value" name="Kota[]" type="text" required><button id="kurangin" class="btn btn-danger">Remove</button><button onclick="tambahin3_child()" class="btn btn-success">Add More</button>
            	</div>`);
	}

	

</script>

<!-- Dynamic Forms  -->

<script>
    $(document).ready(function() {
      $("#tambahin").click(function(add){
      	add.preventDefault()
      	$("#barisan").prepend(`<div class="d-flex gap-2 inputan">
            		<input class="input" placeholder="CplumnName" name="Nama[]" required type="text">
          <input class="input" placeholder="Value" name="Kota[]" type="text" required><input class="input" placeholder="Agama" name="Agama[]" type="text" required><button id="kurangin" class="btn btn-danger">Remove</button><button onclick id="tambahin2" class="btn btn-success">Add More</button>
            	</div>`);
      })

      $(document).on('click', '#kurangin', function(del) {
      	del.preventDefault();
      	let row_item = $(this).parent().parent();
      	$(row_item).remove();
      });
      $(document).on('click', '#tambahin2', function(add) {
      	add.preventDefault();
      	let row_item = $(this).parent();
      	$("#barisan").prepend(`<div class="d-flex gap-2 inputan">
            		<input class="input" placeholder="Nama" name="Nama[]" required type="text">
          <input class="input" placeholder="Kota" name="Kota[]" type="text" required><input class="input" placeholder="Agama" name="Agama[]" type="text" required><button id="kurangin" class="btn btn-danger">Remove</button><button onclick id="tambahin2" class="btn btn-success">Add More</button>
            	</div>`);
      });
    })
  </script>

	<!-- END #app -->
<?= $this->endSection() ?>
