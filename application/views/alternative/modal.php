 <!-- The Modal -->
 <div class="modal" id="addModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Alternative</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?= base_url('alternative/post') ?>" method="post">
            <div class="form-group">
                <label for="">Name <small class="text-danger">*</small></label>
                <input type="text"  name="name" placeholder="Enter Name" required class="form-control">
            </div>
            <div class="float-right pt-2">
              <button class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

   <!-- The Modal -->
 <div class="modal" id="modalUpdate">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Alternative Update</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?= base_url('alternative/update') ?>" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="">No. <small class="text-danger">*</small></label>
                <input type="text" readonly  id="no" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Name <small class="text-danger">*</small></label>
                <input type="text" name="name" placeholder="Enter Name" id="name" required class="form-control">
            </div>
            <div class="float-right pt-2">
              <button class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>