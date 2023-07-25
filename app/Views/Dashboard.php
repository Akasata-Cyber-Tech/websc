<?= $this->extend('partials/layouts') ?>

<!-- <?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?> -->

<?= $this->section('main') ?>

        <?= $this->include('partials/navbar') ?>
        <?= $this->include('partials/sidebar') ?>
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
			<!-- END page-header -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>Users</h4>
							<p>3,291,922</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-link"></i></div>
						<div class="stats-info">
							<h4>Roles</h4>
							<p>20</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>Active Users</h4>
							<p>1,291,922</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>Offline Users</h4>
							<p>4</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
			</div>
			<!-- END row -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-8 -->
				<div class="col-xl-8 ui-sortable">
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="index-1">
						<div class="panel-heading ui-sortable-handle">
							<h4 class="panel-title">User &amp; Roles Created (Last 7 Days)</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body pe-1">
							<div id="interactive-chart" class="h-300px" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 811.917px; height: 300px;" width="1014" height="375"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 811.917px; height: 300px;" width="1014" height="375"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text style="position: absolute; text-align: center;" x="96.19301817964254" y="295" class="flot-tick-label tickLabel">May 15</text><text style="position: absolute; text-align: center;" x="215.23254449543202" y="295" class="flot-tick-label tickLabel">May 19</text><text style="position: absolute; text-align: center;" x="334.2720708112215" y="295" class="flot-tick-label tickLabel">May 22</text><text style="position: absolute; text-align: center;" x="453.311597127011" y="295" class="flot-tick-label tickLabel">May 25</text><text style="position: absolute; text-align: center;" x="572.3511234428005" y="295" class="flot-tick-label tickLabel">May 28</text><text style="position: absolute; text-align: center;" x="691.3906497585899" y="295" class="flot-tick-label tickLabel">May 31</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text style="position: absolute; text-align: right;" x="14.733333587646484" y="272" class="flot-tick-label tickLabel">0</text><text style="position: absolute; text-align: right;" x="7.866666793823242" y="239.5" class="flot-tick-label tickLabel">20</text><text style="position: absolute; text-align: right;" x="7.866666793823242" y="207" class="flot-tick-label tickLabel">40</text><text style="position: absolute; text-align: right;" x="7.866666793823242" y="174.5" class="flot-tick-label tickLabel">60</text><text style="position: absolute; text-align: right;" x="7.866666793823242" y="142" class="flot-tick-label tickLabel">80</text><text style="position: absolute; text-align: right;" x="1" y="12" class="flot-tick-label tickLabel">160</text><text style="position: absolute; text-align: right;" x="1" y="109.5" class="flot-tick-label tickLabel">100</text><text style="position: absolute; text-align: right;" x="1" y="77" class="flot-tick-label tickLabel">120</text><text style="position: absolute; text-align: right;" x="1" y="44.5" class="flot-tick-label tickLabel">140</text></g><g class="" style="position: absolute; inset: 0px;"></g></svg></div><div class="legend" style="position: absolute; top: 18px; right: 31px; width: 116.183px; height: 3.2em; pointer-events: none;"><svg class="legendLayer" style="width:inherit;height:inherit;"><rect class="background" width="100%" height="100%"></rect><defs><symbol id="line" fill="none" viewBox="-5 -5 25 25"><polyline points="0,15 5,5 10,10 15,0"></polyline></symbol><symbol id="area" stroke-width="1" viewBox="-5 -5 25 25"><polyline points="0,15 5,5 10,10 15,0, 15,15, 0,15"></polyline></symbol><symbol id="bars" stroke-width="1" viewBox="-5 -5 25 25"><polyline points="1.5,15.5 1.5,12.5, 4.5,12.5 4.5,15.5 6.5,15.5 6.5,3.5, 9.5,3.5 9.5,15.5 11.5,15.5 11.5,7.5 14.5,7.5 14.5,15.5 1.5,15.5"></polyline></symbol><symbol id="circle" viewBox="-5 -5 25 25"><circle cx="0" cy="15" r="2.5"></circle><circle cx="5" cy="5" r="2.5"></circle><circle cx="10" cy="10" r="2.5"></circle><circle cx="15" cy="0" r="2.5"></circle></symbol><symbol id="rectangle" viewBox="-5 -5 25 25"><rect x="-2.1" y="12.9" width="4.2" height="4.2"></rect><rect x="2.9" y="2.9" width="4.2" height="4.2"></rect><rect x="7.9" y="7.9" width="4.2" height="4.2"></rect><rect x="12.9" y="-2.1" width="4.2" height="4.2"></rect></symbol><symbol id="diamond" viewBox="-5 -5 25 25"><path d="M-3,15 L0,12 L3,15, L0,18 Z"></path><path d="M2,5 L5,2 L8,5, L5,8 Z"></path><path d="M7,10 L10,7 L13,10, L10,13 Z"></path><path d="M12,0 L15,-3 L18,0, L15,3 Z"></path></symbol><symbol id="cross" fill="none" viewBox="-5 -5 25 25"><path d="M-2.1,12.9 L2.1,17.1, M2.1,12.9 L-2.1,17.1 Z"></path><path d="M2.9,2.9 L7.1,7.1 M7.1,2.9 L2.9,7.1 Z"></path><path d="M7.9,7.9 L12.1,12.1 M12.1,7.9 L7.9,12.1 Z"></path><path d="M12.9,-2.1 L17.1,2.1 M17.1,-2.1 L12.9,2.1 Z"></path></symbol><symbol id="plus" fill="none" viewBox="-5 -5 25 25"><path d="M0,12 L0,18, M-3,15 L3,15 Z"></path><path d="M5,2 L5,8 M2,5 L8,5 Z"></path><path d="M10,7 L10,13 M7,10 L13,10 Z"></path><path d="M15,-3 L15,3 M12,0 L18,0 Z"></path></symbol></defs><g><use xlink:href="#line" class="legendIcon" x="3px" y="0em" stroke="#348fe2" stroke-width="2" width="1.5em" height="1.5em"></use><use xlink:href="#circle" class="legendIcon" x="3px" y="0em" fill="#FFFFFF" stroke="#348fe2" stroke-width="2" width="1.5em" height="1.5em"></use><text x="3px" y="0em" text-anchor="start"><tspan dx="2em" dy="1.2em">Page Views</tspan></text></g><g><use xlink:href="#line" class="legendIcon" x="3px" y="1.5em" stroke="#32a932" stroke-width="2" width="1.5em" height="1.5em"></use><use xlink:href="#circle" class="legendIcon" x="3px" y="1.5em" fill="#FFFFFF" stroke="#32a932" stroke-width="2" width="1.5em" height="1.5em"></use><text x="3px" y="1.5em" text-anchor="start"><tspan dx="2em" dy="1.2em">Visitors</tspan></text></g></svg></div></div>
						</div>
					</div>
					<!-- END panel -->
					
					<!-- BEGIN tabs -->
					
					
					<!-- END tabs -->
					
					<!-- BEGIN panel -->
					
					<!-- END panel -->
                    
					<!-- BEGIN panel -->
					
					<!-- END panel -->
				</div>
				<!-- END col-8 -->
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 ui-sortable">
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="index-6">
						<div class="panel-heading ui-sortable-handle">
							<h4 class="panel-title">User Level Analytics</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand" data-tooltip-init="true"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-panel align-middle mb-0">
								<thead>
									<tr>	
										<th>Source</th>
										<th>Total</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td nowrap=""><label class="badge bg-danger">High Risk</label></td>
										<td>30<span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
										
									</tr>
									<tr>
										<td nowrap=""><label class="badge bg-warning">Normal</label></td>
										<td>20</td>
										
									</tr>
									<tr>
										<td nowrap=""><label class="badge bg-success">Safe</label></td>
										<td>10</td>
										
									</tr>
									
									
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- END panel -->
					
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="index-7">
						<div class="panel-heading ui-sortable-handle">
							<h4 class="panel-title">AVG Active Roles</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<div id="donut-chart" class="h-300px" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 375.333px; height: 300px;" width="469" height="375"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 375.333px; height: 300px;" width="469" height="375"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="" style="position: absolute; inset: 0px;"></g></svg></div><div class="legend" style="position: absolute; top: 5px; right: 5px; width: 98.9px; height: 8em; pointer-events: none;"><svg class="legendLayer" style="width:inherit;height:inherit;"><rect class="background" width="100%" height="100%"></rect><defs><symbol id="line" fill="none" viewBox="-5 -5 25 25"><polyline points="0,15 5,5 10,10 15,0"></polyline></symbol><symbol id="area" stroke-width="1" viewBox="-5 -5 25 25"><polyline points="0,15 5,5 10,10 15,0, 15,15, 0,15"></polyline></symbol><symbol id="bars" stroke-width="1" viewBox="-5 -5 25 25"><polyline points="1.5,15.5 1.5,12.5, 4.5,12.5 4.5,15.5 6.5,15.5 6.5,3.5, 9.5,3.5 9.5,15.5 11.5,15.5 11.5,7.5 14.5,7.5 14.5,15.5 1.5,15.5"></polyline></symbol><symbol id="circle" viewBox="-5 -5 25 25"><circle cx="0" cy="15" r="2.5"></circle><circle cx="5" cy="5" r="2.5"></circle><circle cx="10" cy="10" r="2.5"></circle><circle cx="15" cy="0" r="2.5"></circle></symbol><symbol id="rectangle" viewBox="-5 -5 25 25"><rect x="-2.1" y="12.9" width="4.2" height="4.2"></rect><rect x="2.9" y="2.9" width="4.2" height="4.2"></rect><rect x="7.9" y="7.9" width="4.2" height="4.2"></rect><rect x="12.9" y="-2.1" width="4.2" height="4.2"></rect></symbol><symbol id="diamond" viewBox="-5 -5 25 25"><path d="M-3,15 L0,12 L3,15, L0,18 Z"></path><path d="M2,5 L5,2 L8,5, L5,8 Z"></path><path d="M7,10 L10,7 L13,10, L10,13 Z"></path><path d="M12,0 L15,-3 L18,0, L15,3 Z"></path></symbol><symbol id="cross" fill="none" viewBox="-5 -5 25 25"><path d="M-2.1,12.9 L2.1,17.1, M2.1,12.9 L-2.1,17.1 Z"></path><path d="M2.9,2.9 L7.1,7.1 M7.1,2.9 L2.9,7.1 Z"></path><path d="M7.9,7.9 L12.1,12.1 M12.1,7.9 L7.9,12.1 Z"></path><path d="M12.9,-2.1 L17.1,2.1 M17.1,-2.1 L12.9,2.1 Z"></path></symbol><symbol id="plus" fill="none" viewBox="-5 -5 25 25"><path d="M0,12 L0,18, M-3,15 L3,15 Z"></path><path d="M5,2 L5,8 M2,5 L8,5 Z"></path><path d="M10,7 L10,13 M7,10 L13,10 Z"></path><path d="M15,-3 L15,3 M12,0 L18,0 Z"></path></symbol></defs><g><text x="3px" y="0em" text-anchor="start"><tspan dx="2em" dy="1.2em">Chrome</tspan></text></g><g><text x="3px" y="1.5em" text-anchor="start"><tspan dx="2em" dy="1.2em">Firefox</tspan></text></g><g><text x="3px" y="3em" text-anchor="start"><tspan dx="2em" dy="1.2em">Safari</tspan></text></g><g><text x="3px" y="4.5em" text-anchor="start"><tspan dx="2em" dy="1.2em">Opera</tspan></text></g><g><text x="3px" y="6em" text-anchor="start"><tspan dx="2em" dy="1.2em">IE</tspan></text></g></svg></div><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 81px; left: 247.292px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgba(114,124,182, .75);">Chrome<br>37%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 260px; left: 110.992px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgba(114,124,182, 1);">Firefox<br>32%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 122px; left: 6.71665px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgba(114,124,182, .5);">Safari<br>16%</div></span><span class="pieLabel" id="pieLabel3" style="position: absolute; top: 32px; left: 54.4167px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#348fe2;">Opera<br>11%</div></span><span class="pieLabel" id="pieLabel4" style="position: absolute; top: 6px; left: 120.008px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgba(52,143,226, .75);">IE<br>5%</div></span></div>
						</div>
					</div>
					<!-- END panel -->
					
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="index-8">
						<div class="panel-heading ui-sortable-handle">
							<h4 class="panel-title">Todo List</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload" data-tooltip-init="true"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body p-0">
							<div class="todolist">
								<div class="todolist-item active">
									<div class="todolist-input">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="todolist1" data-change="todolist" checked="">
										</div>
									</div>
									<label class="todolist-label" for="todolist1">Donec vehicula pretium nisl, id lacinia nisl tincidunt id.</label>
								</div>
								<div class="todolist-item">
									<div class="todolist-input">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="todolist2" data-change="todolist">
										</div>
									</div>
									<label class="todolist-label" for="todolist2">Duis a ullamcorper massa.</label>
								</div>
								<div class="todolist-item">
									<div class="todolist-input">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="todolist3" data-change="todolist">
										</div>
									</div>
									<label class="todolist-label" for="todolist3">Phasellus bibendum, odio nec vestibulum ullamcorper.</label>
								</div>
								<div class="todolist-item">
									<div class="todolist-input">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="todolist4" data-change="todolist">
										</div>
									</div>
									<label class="todolist-label" for="todolist4">Duis pharetra mi sit amet dictum congue.</label>
								</div>
								<div class="todolist-item">
									<div class="todolist-input">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="todolist5" data-change="todolist">
										</div>
									</div>
									<label class="todolist-label" for="todolist5">Duis pharetra mi sit amet dictum congue.</label>
								</div>
								<div class="todolist-item">
									<div class="todolist-input">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="todolist6" data-change="todolist">
										</div>
									</div>
									<label class="todolist-label" for="todolist6">Phasellus bibendum, odio nec vestibulum ullamcorper.</label>
								</div>
								<div class="todolist-item">
									<div class="todolist-input">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="todolist7" data-change="todolist">
										</div>
									</div>
									<label class="todolist-label" for="todolist7">Donec vehicula pretium nisl, id lacinia nisl tincidunt id.</label>
								</div>
							</div>
						</div>
					</div>
					<!-- END panel -->
					
					<!-- BEGIN panel -->
					
					<!-- END panel -->
					
					<!-- BEGIN panel -->
					
					<!-- END panel -->
				</div>
				<!-- END col-4 -->
			</div>
			<!-- END row -->
		</div>
		<!-- END #content -->
	
		<!-- BEGIN theme-panel -->
		<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>
				
				<!-- BEGIN theme-list -->
				<div class="theme-list">
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
					<div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
				</div>
				<!-- END theme-list -->
				
				<div class="theme-panel-divider"></div>
				
				<div class="row mt-10px">
					<div class="col-8 control-label text-dark fw-bold">
						<div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
						<div class="lh-14">
							<small class="text-dark opacity-50">
								Adjust the appearance to reduce glare and give your eyes a break.
							</small>
						</div>
					</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
							<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
						</div>
					</div>
				</div>
				
				<div class="theme-panel-divider"></div>
				
				<!-- BEGIN theme-switch -->
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Header Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
							<label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Header Inverse</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
							<label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Sidebar Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
							<label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Sidebar Grid</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
							<label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-md-8 control-label text-dark fw-bold">Gradient Enabled</div>
					<div class="col-md-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
							<label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
						</div>
					</div>
				</div>
				<!-- END theme-switch -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Admin Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index_v2.html" class="theme-version-link active">
							<span style="background-image: url(../assets/img/theme/default.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_transparent/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/transparent.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_apple/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/apple.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_material/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/material.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_facebook/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/facebook.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_google/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/google.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Language Version (7)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index.html" class="theme-version-link active">
							<span style="background-image: url(../assets/img/version/html.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_ajax/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/ajax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/angular1x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs13/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/angular10x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/laravel.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_vuejs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/vuejs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_reactjs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/reactjs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('.NET Core 6.0 MVC Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/dotnet.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Frontend Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_one_page_parallax/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/one-page-parallax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_e_commerce/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/e-commerce.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_blog/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/blog.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_forum/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/forum.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_corporate/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/corporate.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
				<a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
			</div>
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
<?= $this->endSection() ?>
