<div class="modal fade" id="modal-add-responsible">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Responsible</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-12">

              <div class="form-group">
                <div class="col-md-6">
                  <label class="control-label">Name</label>
                  <input type="text" name="product_name" class="form-control">  
                </div>
                <div class="col-md-3">
                  <label class="control-label">Image</label>
                  <input type="file" name="product_name" class="form-control">  
                </div>
                <div class="col-md-3">
                  <img src="" class="img-responsive">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label">Email</label>
                  <input type="text" name="email" class="form-control">  
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <label class="control-label">Phone</label>
                  <input type="text" name="phone" class="form-control">  
                </div>
                <div class="col-md-6">
                  <label class="control-label">Mobile</label>
                  <input type="text" name="mobile" class="form-control">  
                </div>
              </div>
              
            </div>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pamindo">Save</button>
      </div>
    </div>
  </div>
</div>