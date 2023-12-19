<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Evaluation</h1>
    </div>
    <?php $this->load->view('partials/messages'); ?>

    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
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
                                echo "<th><input type='number' class='form-control' value='".get_value_evaluation($value->id_alternative,$val->id_criteria)."' name='id[".$val->id_criteria."][".$value->id_alternative."]'  required></th>";
                                // echo "<input type='hidden' class='form-control' value='".$val->id_criteria."' name='value[".$key."][id_criteria]'  required>";
                                // echo "<input type='hidden' class='form-control' value='".$value->id_alternative."' name='value[".$key."][id_alternative]'  required>";
                            } ?>
                        </tr>
                        <?php } ?>
                    </tbody>

                    
                </table>
                <div class="float-right p-4">
                    <button id="btn_submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                </div>
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
        // var arr = $('input[name="value[]"]').map(function () {
        //     return this.value; // $(this).val()
        // }).get();
        // console.log(arr);
        // $('input[name^="value"]').each(function() {
        //     console.log($(this).val());
        // });
        // console.log(JSON.stringify($('.form-control').serializeArray(), 0, 3));
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
