		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										Sean Ngu
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Frontend developer</small>
							</div>
						</a>
					</div>
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>
						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>
						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>
					<div class="menu-header">Pages</div>
					<div class="menu-item has-sub active">
                    <div class="menu-item ">
						<a href="<?php echo site_url('/') ?>" class="menu-link">
							<div class="menu-icon-img">
								<img src="../assets/img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Dashboard</div> 
						</a>
					</div>
                    <div class="menu-item ">
						<a href="<?php echo site_url('Assets') ?>" class="menu-link">
							<div class="menu-icon-img">
								<img src="../assets/img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Assets</div> 
						</a>
					</div>
                    
                    <div class="menu-header">Contol Panel</div>
                    <div class="menu-item ">
						<a href="<?php echo site_url('Users') ?>" class="menu-link">
							<div class="menu-icon-img">
								<img src="../assets/img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Users</div> 
						</a>
					</div>
                    <div class="menu-item ">
						<a href="<?php echo site_url('DataPermission') ?>" class="menu-link">
							<div class="menu-icon-img">
								<img src="../assets/img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Data Permissions</div> 
						</a>
					</div>
                    <div class="menu-item ">
						<a href="<?php echo site_url('Roles') ?>" class="menu-link">
							<div class="menu-icon-img">
								<img src="../assets/img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Roles</div> 
						</a>
					</div>
					</div>
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<!-- END #sidebar -->