<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Result SAW</h1>
    </div>
    <?php $this->load->view('partials/messages'); ?>

    
    <!-- Alternative -->
    <div class="card shadow mb-4">
		<div class="card-header">
			<h3>Table Alternative</h3>
		</div>
        <div class="card-body">
            <div class="table table-responsive">
				<table class="table table-hover" id="dataTable" >
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($alternative as $alt) { ?>
                        <tr>
                            <td><?= 'A'.$alt->id_alternative ?></td>
                            <td><?= $alt->name; ?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

				
            </div>
        </div>
    </div>

	<!-- Criteria -->
	<div class="card shadow mb-4">
		<div class="card-header">
			<h3>Table Criteria</h3>
		</div>
        <div class="card-body">
            <div class="table table-responsive">
			<table class="table table-hover" id="dataTable" >
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Criteria</th>
                            <th>Weight</th>
                            <th>Attribute</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($criteria as $crt) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $crt->criteria; ?></td>
                            <td><?= $crt->weight; ?></td>
                            <td><?= $crt->attribute; ?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

	<!-- Rating Kecocokan Dari Setiap Alternatif Pada Setiap Kriteria -->
	<div class="card shadow mb-4">
		<div class="card-header">
			<h3>Table Rating Kecocokan Dari Setiap Alternatif Pada Setiap Kriteria</h3>
		</div>
        <div class="card-body">
		<div class="table table-bordered">
                <table >
                    <tbody>
                        <tr>
                            <th colspan="2">Alternatif</th>
                            <th colspan="7">Criteria</th>
                        </tr>
                        <tr>
                            <th colspan="2"></th>
                            <?php foreach($criteria as $key=>$value){
                                echo "<th>"."C".$value->id_criteria."</th>";
                            } ?>
                        </tr>
                            <?php foreach($alternative as $key=>$value){ ?>
                        <tr>
                            <th colspan="2"><?= "A".$value->id_alternative ?></th>
                            <?php foreach($criteria as $i=>$val){
                                echo "<th><input type='number' readonly class='form-control' value='".get_value_evaluation($value->id_alternative,$val->id_criteria)."' name='id[".$val->id_criteria."][".$value->id_alternative."]'  required></th>";
                            } ?>
                        </tr>
                        <?php } ?>
                    </tbody>

                    
                </table>
            </div>
        </div>
    </div>

	<!-- Rating Matriks -->

	<div class="card shadow mb-4">
		<div class="card-header">
			<h3>Table Matriks</h3>
		</div>
        <div class="card-body">
			<div class="table table-responsive">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <th colspan="2" class="text-center"><b>Alternatif</b></th>
                            <th colspan="7" class="text-center"><b>Criteria</b></th>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-center"></th>
                            <?php foreach($criteria as $key=>$value){
                                echo "<th class='text-center'><b>"."C".$value->id_criteria."</b></th>";
                            } ?>
                        </tr>
                            <?php foreach($matriks as $key=>$value){ ?>
                        <tr>
                            <th colspan="2"><b><?= "A".$key ?></b></th>
                            <?php foreach($value as $i=>$val){
                                echo "<td>".$val."</td>";
								
                            } ?>
                        </tr>
                        <?php } ?>
                    </tbody>

                    
                </table>
            </div>
        </div>
    </div>


	<!-- Preferensi -->
	<div class="card shadow mb-4">
		<div class="card-header">
			<h3>Table Preferensi</h3>
		</div>
        <div class="card-body">
            <div class="table table-responsive">
			<table class="table table-hover" id="dataTable" >
                    <thead>
                        <tr>
                            <th>Alternative</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($preferensi as $k=>$prf) { ?>
                        <tr>
                            <td><?= "A".$k ?></td>
                            <td><?= $prf; ?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


	<!-- Rank -->
	<div class="card shadow mb-4">
		<div class="card-header">
			<h3>Table Ranking</h3>
		</div>
        <div class="card-body">
            <div class="table table-responsive">
			<table class="table table-hover" id="dataTable" >
                    <thead>
                        <tr>
                            <th>Alternative</th>
                            <th>Result</th>
							<th>Rank</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $rank=1; arsort($preferensi);
							foreach($preferensi as $k=>$prf) {  ?>
                        <tr>
                            <td><?= "A".$k ?></td>
                            <td><?= $prf; ?></td>
							<td><?= $rank++ ?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->\
<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/jquery/jquery.min.js"></script>
<script>
    $("#btn_submit").click(function(e){
        e.preventDefault();

        var data = JSON.stringify($('.form-control').serializeArray(), 0, 3)
        $.ajax({
        
            url: "<?= base_url() ?>evaluation/post",
                dataType: "json",
                type: "POST",
                data: {
                    "dataJson": data,
                },
                success: function(res) {
                    // console.log(res);\\\
                    if(res.code == 200) {
                        window.location.href = "<?= base_url() ?>/evaluation";
                    }
                }
            })
    });

</script>
