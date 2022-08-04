<!DOCTYPE html>

<html lang="en">



<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta charset="utf-8" />

	<title>Admin Web <?= SITE_NAME; ?></title>



	<meta name="description" content="top menu &amp; navigation" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<link rel="shortcut icon" href="<?php echo base_url(); ?>assetsadmin/img/favicon-elecomp.png" type="image/x-icon" />



	<!-- bootstrap & fontawesome -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/css/bootstrap.css" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/css/font-awesome.css" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/css/all.css" />



	<!-- page specific plugin styles -->



	<!-- text fonts -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/css/ace-fonts.css" />



	<!-- ace styles -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

	<link href="<?= base_url(); ?>assetsadmin/plugins/sweetalert/sweetalert.css" rel="stylesheet">

	<link href="<?= base_url(); ?>assetsadmin/plugins/select2/select2.min.css" rel="stylesheet">

	<!--[if lte IE 9]>

			<link rel="stylesheet" href="../assetsadmin/css/ace-part2.css" class="ace-main-stylesheet" />

		<![endif]-->



	<!--[if lte IE 9]>

		  <link rel="stylesheet" href="../assetsadmin/css/ace-ie.css" />

		<![endif]-->



	<!-- inline styles related to this page -->



	<!-- ace settings handler -->

	<script src="<?php echo base_url(); ?>assetsadmin/js/ace-extra.js"></script>

	<script src="<?= base_url(); ?>assetsadmin/jquery/jquery-2.1.4.min.js"></script>

	<script src="<?= base_url(); ?>assetsadmin/ckeditor/ckeditor.js"></script>



	<!-- ckeditor -->

	<!-- <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script> -->





	<!--[if lte IE 8]>

		<script src="../assetsadmin/js/html5shiv.js"></script>

		<script src="../assetsadmin/js/respond.js"></script>

		<![endif]-->



</head>

<script type="text/javascript">
	var table;

	// Clear Search & Reload Tabel

	function reload_table() {

		table.search('');

		table.ajax.reload(null, false);

	}



	function modal_show() {

		$('#modal_form').modal('show');

	}



	function modal_hide() {

		$('#modal_form').modal('hide');

	}



	function swal_berhasil() {

		swal({

			title: "SUCCESS",

			text: "Berhasil",

			type: "success",

			closeOnConfirm: true

		});

	}



	function swal_error(msg) {

		swal({

			title: "ERROR",

			text: msg,

			type: "warning",

			closeOnConfirm: true

		});

	}

	// Delete Data

	function delete_data(table, id) {

		swal({

				title: "Hapus Data",

				text: "Yakin akan menghapus data ini?",

				type: "warning",

				showCancelButton: true,

				confirmButtonText: "Hapus",

				closeOnConfirm: true,

			},

			function() {

				$.ajax({

					url: "<?= site_url() ?>admin/delete/" + table + '/' + id,

					type: "POST",

					dataType: "JSON",

					success: function(data) {

						$('#modal_form').modal('hide');

						swal({

							title: "SUCCESS",

							text: "Hapus Berhasil",

							type: "success",

							closeOnConfirm: true

						});

						reload_table();

					},

					error: function(jqXHR, textStatus, errorThrown) {

						swal({

							title: "ERROR",

							text: "Error deleting data",

							type: "warning",

							closeOnConfirm: true

						});

					}

				});

			});

	}



	function undelete_data(table, id) {

		$.ajax({

			url: "<?= site_url() ?>admin/undelete/" + table + '/' + id,

			type: "POST",

			dataType: "JSON",

			success: function(data) {

				$('#modal_form').modal('hide');

				swal({

					title: "SUCCESS",

					text: "Data Berhasil Dikembalikan",

					type: "success",

					closeOnConfirm: true

				});

				reload_table();

			},

			error: function(jqXHR, textStatus, errorThrown) {

				swal({

					title: "ERROR",

					text: "Error undeleting data",

					type: "warning",

					closeOnConfirm: true

				});

			}

		});

	}
</script>

<!-- <body class="hold-transition skin-blue sidebar-mini fixed"> -->



<body class="no-skin">

	<!-- #section:basics/navbar.layout -->

	<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar">

		<script type="text/javascript">
			try {

				ace.settings.check('navbar', 'fixed')

			} catch (e) {}
		</script>



		<div class="navbar-container" id="navbar-container">

			<div class="navbar-header pull-left">

				<!-- #section:basics/navbar.layout.brand -->

				<a href="#" class="navbar-brand">

					<small>

						HANISUN CAKE

					</small>

				</a>



				<!-- /section:basics/navbar.layout.brand -->



				<!-- #section:basics/navbar.toggle -->

				<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">

					<span class="sr-only">Toggle user menu</span>



					<img src="<?= base_url(); ?>assetsadmin/avatars/avatar2.png" alt="Jason's Photo" />

				</button>



				<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">

					<span class="sr-only">Toggle sidebar</span>



					<span class="icon-bar"></span>



					<span class="icon-bar"></span>



					<span class="icon-bar"></span>

				</button>



				<!-- /section:basics/navbar.toggle -->

			</div>



			<!-- #section:basics/navbar.dropdown -->

			<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">

				<ul class="nav ace-nav">

					<!-- #section:basics/navbar.user_menu -->

					<li class="light-blue user-min">

						<a data-toggle="dropdown" href="#" class="dropdown-toggle">

							<img class="nav-user-photo" src="<?php echo base_url(); ?>assetsadmin/avatars/avatar2.png" alt="Jason's Photo" />

							<span class="user-info">

								<small>Welcome,</small>

								<?php echo $this->session->userdata('admin_nama'); ?>

							</span>



							<i class="ace-icon fa fa-caret-down"></i>

						</a>



						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

							<li>

								<a href="<?php echo base_url(); ?>Setup">

									<i class="ace-icon fa fa-cog"></i>

									Settings

								</a>

							</li>



							<li>

								<a href="<?php echo base_url(); ?>Profile">

									<i class="ace-icon fa fa-user"></i>

									Profile

								</a>

							</li>



							<li class="divider"></li>



							<li>

								<a href="<?= base_url() ?>Login/logout">

									<i class="ace-icon fa fa-power-off"></i>

									Logout

								</a>

							</li>

						</ul>

					</li>



					<!-- /section:basics/navbar.user_menu -->

				</ul>

			</div>



			<!-- /section:basics/navbar.dropdown -->

			<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">



				<!-- /section:basics/navbar.form -->

			</nav>

		</div><!-- /.navbar-container -->

	</div>



	<!-- /section:basics/navbar.layout -->

	<div class="main-container" id="main-container">

		<script type="text/javascript">
			try {

				ace.settings.check('main-container', 'fixed')

			} catch (e) {}
		</script>



		<!-- #section:basics/sidebar.horizontal -->

		<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse">

			<script type="text/javascript">
				try {

					ace.settings.check('sidebar', 'fixed')

				} catch (e) {}
			</script>



			<div class="sidebar-shortcuts" id="sidebar-shortcuts">

				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

					<button class="btn btn-success">

						<i class="ace-icon fa fa-signal"></i>

					</button>



					<button class="btn btn-info">

						<i class="ace-icon fa fa-pencil"></i>

					</button>



					<!-- #section:basics/sidebar.layout.shortcuts -->

					<button class="btn btn-warning">

						<i class="ace-icon fa fa-users"></i>

					</button>



					<button class="btn btn-danger">

						<i class="ace-icon fa fa-cogs"></i>

					</button>



					<!-- /section:basics/sidebar.layout.shortcuts -->

				</div>



				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">

					<span class="btn btn-success"></span>



					<span class="btn btn-info"></span>



					<span class="btn btn-warning"></span>



					<span class="btn btn-danger"></span>

				</div>

			</div><!-- /.sidebar-shortcuts -->



			<?php $this->load->view('admin/view_menu'); ?>



			<!-- #section:basics/sidebar.layout.minimize -->



			<!-- /section:basics/sidebar.layout.minimize -->

			<script type="text/javascript">
				try {

					ace.settings.check('sidebar', 'collapsed')

				} catch (e) {}
			</script>

		</div>



		<!-- /section:basics/sidebar.horizontal -->

		<div class="main-content">

			<div class="main-content-inner">

				<div class="page-content">

					<!-- #section:settings.box -->

					<div class="ace-settings-container" id="ace-settings-container">

						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">

							<i class="ace-icon fa fa-cog bigger-130"></i>

						</div>



						<div class="ace-settings-box clearfix" id="ace-settings-box">

							<div class="pull-left width-50">

								<!-- #section:settings.skins -->

								<div class="ace-settings-item">

									<div class="pull-left">

										<select id="skin-colorpicker" class="hide">

											<option data-skin="no-skin" value="#438EB9">#438EB9</option>

											<option data-skin="skin-1" value="#222A2D">#222A2D</option>

											<option data-skin="skin-2" value="#C6487E">#C6487E</option>

											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>

										</select>

									</div>

									<span>&nbsp; Choose Skin</span>

								</div>



								<!-- /section:settings.skins -->



								<!-- #section:settings.navbar -->

								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />

									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>

								</div>



								<!-- /section:settings.navbar -->



								<!-- #section:settings.sidebar -->

								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />

									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>

								</div>



								<!-- /section:settings.sidebar -->



								<!-- #section:settings.breadcrumbs -->

								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />

									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>

								</div>



								<!-- /section:settings.breadcrumbs -->



								<!-- #section:settings.rtl -->

								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />

									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>

								</div>



								<!-- /section:settings.rtl -->



								<!-- #section:settings.container -->

								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />

									<label class="lbl" for="ace-settings-add-container">

										Inside

										<b>.container</b>

									</label>

								</div>



								<!-- /section:settings.container -->

							</div><!-- /.pull-left -->



							<div class="pull-left width-50">

								<!-- #section:basics/sidebar.options -->

								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />

									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>

								</div>



								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />

									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>

								</div>



								<div class="ace-settings-item">

									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />

									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>

								</div>



								<!-- /section:basics/sidebar.options -->

							</div><!-- /.pull-left -->

						</div><!-- /.ace-settings-box -->

					</div><!-- /.ace-settings-container -->



					<!-- /section:settings.box -->



					<div class="row">

						<div class="col-xs-12">

							<!-- PAGE CONTENT BEGINS -->

							<div class="alert alert-info visible-sm visible-xs">

								<button type="button" class="close" data-dismiss="alert">

									<i class="ace-icon fa fa-times"></i>

								</button>

								Please note that

								<span class="blue bolder">top menu style</span>

								is visible only in devices larger than

								<span class="blue bolder">991px</span>

								which you can change using CSS builder tool.

							</div>



							<div class="well well-sm visible-sm visible-xs">

								Top menu can become any of the 3 mobile view menu styles:

								<em>default</em>

								,

								<em>collapsible</em>

								or

								<em>minimized</em>.

							</div>

							<?php $this->load->view($view_file) ?>



							<!-- PAGE CONTENT ENDS -->

						</div><!-- /.col -->

					</div><!-- /.row -->

				</div><!-- /.page-content -->

			</div>

		</div><!-- /.main-content --><br />

		<?php $this->load->view('admin/vfooter'); ?>