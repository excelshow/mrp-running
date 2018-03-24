<div class="modal fade" id="modal-add-product">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Product</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-12">

              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label">Product</label>
                  <input type="text" name="product_name" class="form-control">  
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>
                    <input type="checkbox" class="minimal-red">
                    Can be sold
                  </label>
                </div>
                <div class="col-md-12">
                  <label>
                    <input type="checkbox" class="minimal-red">
                    Can be purchased
                  </label>
                </div>
              </div>
            </div>

          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>