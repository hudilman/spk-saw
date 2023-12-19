 <!-- The Modal -->
 <div class="modal" id="addModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Criteria</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?= base_url('criteria/post') ?>" method="post">
            <div class="form-group">
                <label for="">Criteria <small class="text-danger">*</small></label>
                <input type="text"  name="criteria" placeholder="Enter Criteria" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Weight <small class="text-danger">*</small></label>
                <input type="number"  name="weight" placeholder="Enter Weight" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Attribute <small class="text-danger">*</small></label>
                <select name="attribute" class="form-control" required>
                  <option value="benefit">Benefit</option>
                  <option value="cost">Cost</option>
                </select>
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
          <h4 class="modal-title">Criteria Update</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?= base_url('criteria/update') ?>" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="">Criteria <small class="text-danger">*</small></label>
                <input type="text"  name="criteria" placeholder="Enter Criteria" required class="form-control" id="criteria">
            </div>
            <div class="form-group">
                <label for="">Weight <small class="text-danger">*</small></label>
                <input type="number"  name="weight" placeholder="Enter Weight" required class="form-control" id="weight">
            </div>
            <div class="form-group">
                <label for="">Attribute <small class="text-danger">*</small></label>
                <select name="attribute" class="form-control" required id="attribute">
                  <option value="benefit">Benefit</option>
                  <option value="cost">Cost</option>
                </select>
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