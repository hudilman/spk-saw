<!-- Main Content -->
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800"><?php echo ucwords($this->lang->line('dashboard')); ?></h1>
		</div>
		<div class="row">


			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-6 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Total Alternative</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $count_alternative ?>

								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-users fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-6 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Total Criteria
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $count_criteria ?>

								</div>
							</div>
							<div class="col-auto">
								<i class="fas fas fa-users fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			

			<!-- Pending Requests Card Example -->
			

			<!-- <div class="col-xl-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-body">
						<canvas id="payment_project"></canvas>
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-body">
						<canvas id="payment_regency"></canvas>
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-body">
						<canvas id="payment_village"></canvas>
					</div>
				</div>
			</div> -->

		</div>

		<!-- Content Row -->

		<!-- <div class="row">

            
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $this->lang->line('payment_history'); ?></h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header"><?php echo ucwords($this->lang->line('data')); ?></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><?php echo ucwords($this->lang->line('today')); ?></a>
                                <a class="dropdown-item" href="#"><?php echo ucwords($this->lang->line('weekly')); ?></a>
                                <a class="dropdown-item" href="#"><?php echo ucwords($this->lang->line('monthly')); ?></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <h1>Test</h1>
                    </div>
                </div>
            </div>
        </div> -->
	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


