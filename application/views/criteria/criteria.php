<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Criteria</h1>
    </div>
    <?php $this->load->view('criteria/modal'); ?>
    <?php $this->load->view('partials/messages'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-left">
                <a  class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Add</a>
            </div>
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
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($list as $l) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $l->criteria; ?></td>
                            <td><?= $l->weight; ?></td>
                            <td><?= $l->attribute; ?></td>
                            <td>
                                <a onclick="edit_func('<?= $l->id_criteria ?>','<?= $l->criteria ?>','<?= $l->weight ?>','<?= $l->attribute ?>')" class="btn btn-info">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                            </td>
                            <td>

                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal<?php echo $l->id_criteria; ?>">
                                    <i class="fa fa-trash"></i> Delete
                                </button>

                                <!-- Logout Modal-->
                                <div class="modal fade" id="DeleteModal<?php echo $l->id_criteria; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('delete'); ?></h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><?php echo $this->lang->line('delete_data'); ?></div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo ucwords($this->lang->line('cancel')); ?></button>
                                                <a class="btn btn-danger" href="<?php echo base_url('criteria/delete/'.$l->id_criteria); ?>"><?php echo ucwords($this->lang->line('delete')); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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
<!-- End of Main Content -->
<script>
    function edit_func(id,criteria,weight,attribute){
        $("#modalUpdate").modal("show");
        $("#id").val(id);
        $("#criteria").val(criteria);
        $("#weight").val(weight);
        $("#attribute").val(attribute);
    }
</script>