<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Web Metode SAW - SPK">
	<meta name="author" content="Mohamad Ilman Huda">

	<title>
		<?php $judul = $folder_name." - ".$file_name;  echo ucwords(strtolower(str_replace('_', ' ', $judul)))." | ".$this->lang->line('title'); ?>
	</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/fontawesome-free/css/all.min.css"
		rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>css/sb-admin-2.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
</head>

<body id="page-top">

	<div class="modal fade" id="PaysConfirmModal" tabindex="-1" role="dialog" aria-labelledby="PaysConfirmModalLbel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="PaysConfirmModalLbel">
						<?php echo ucwords($this->lang->line('warning')); ?></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body"><?php echo $this->session->flashdata('success'); ?></div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button"
						data-dismiss="modal"><?php echo ucwords($this->lang->line('close')); ?></button>
				</div>
			</div>
		</div>
	</div>

	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar  ADMIN -->
		<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
				<div class="navbar-brand mx-5">
					SPK Ilman
				</div>
			</a>

			<?php $seg = $this->uri->segment(1); ?>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Divider -->

			<!-- Nav Item - Dashboard -->
			<li class="nav-item <?php echo ($seg == 'dashboard') ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li class="nav-item <?php echo ($seg == 'alternative') ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo base_url('alternative'); ?>">
					<i class="fas fa-users"></i>
					<span>Alternative</span>
				</a>
			</li>

			<li class="nav-item <?php echo ($seg == 'criteria') ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo base_url('criteria'); ?>">
					<i class="fas fa-tasks"></i>
					<span>Criteria</span>
				</a>
			</li>

			<li class="nav-item <?php echo ($seg == 'evaluation') ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo base_url('evaluation'); ?>">
				<i class="fas fa-book-open"></i>
					<span>Evaluations</span>
				</a>
			</li>

			<li class="nav-item <?php echo ($seg == 'report') ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo base_url('report'); ?>">
					<i class="fas fa-book"></i>
					<span>Report Result</span>
				</a>
			</li>

			



			<hr class="sidebar-divider d-none d-md-block">

			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>

	

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Messages -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-envelope fa-flag text-dark"></i>
								<!-- Counter - Messages -->
								<!-- <span class="badge badge-danger badge-counter">7</span> -->
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="messagesDropdown">
								<h5 class="dropdown-header">
									<?php echo $this->lang->line('choose_language'); ?>
								</h5>
								<a class="dropdown-item d-flex align-items-center"
									href="#">
									<div class="font-weight-bold">
										<div class="text-truncate">Tetun</div>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center"
									href="#">
									<div class="font-weight-bold">
										<div class="text-truncate">English</div>
									</div>
								</a>
							</div>
						</li>
						
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span
									class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucwords($this->lang->line('account')); ?></span>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">
								<!-- <a class="dropdown-item" href="<?php echo base_url('user/log'); ?>">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									<?php echo ucwords($this->lang->line('activity_log')); ?>
								</a> -->
								<!-- <div class="dropdown-divider"></div> -->
								<a class="dropdown-item" href="#" >
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Change Password
								</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									<?php echo ucwords($this->lang->line('logout')); ?>
								</a>

							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<?php include(APPPATH.'views/'.$folder_name.'/'.$file_name.'.php'); ?>

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Mohamad Ilman Huda 2023</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('ready_to_leave'); ?>
					</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body"><?php echo $this->lang->line('logout_msg'); ?></div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button"
						data-dismiss="modal"><?php echo ucwords($this->lang->line('cancel')); ?></button>
					<a class="btn btn-primary"
						href="<?php echo base_url('user/logout'); ?>"><?php echo ucwords($this->lang->line('logout')); ?></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/jquery/jquery.min.js"></script>
	<script
		src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js">
	</script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/jquery-easing/jquery.easing.min.js">
	</script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>js/sb-admin-2.min.js"></script>
	<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

	<!-- Page level plugins -->

	<script>
	function reversal_func(tud,td,nik,amount,token_project){
        $("#modal_reversal").modal("show");
        $("#tud").val(tud);
        $("#td").val(td);
        $("#nik").val(nik);
        $("#amount").val(amount);
		$("#tp").val(token_project);
		// $("#tr").val(token_resident);
    }
	</script>
	
	<!-- <script src="<?= base_url() ?>assets/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->
	
	<script>
		$(document).ready( function () {
			$('#dataTable').DataTable();
		} );


		
	</script>
</body>

</html>