<div class="modal fade" id="modal-add-bill-of-material">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Bill of Material</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">

              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label">Product</label>
                  <input type="text" name="product_name" class="form-control">  
                </div>
              </div>
            </div>
            <div class="col-md-6">

            </div>
          </div>
        </form>

        <div class="row">
          <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#components_tab" data-toggle="tab" aria-expanded="true">General Informations</a></li>
                <li class=""><a href="#material_miscellaneous_tab" data-toggle="tab" aria-expanded="false">Sales</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="components_tab">
                  <form class="form-horizontal" action="" method="post">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Product Type</label>
                            <input type="text" name="product_type" class="form-control">  
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="control-label">Sales Price</label>
                            <input type="text" name="sales_price" class="form-control">  
                          </div>
                        </div>
                      </div>
                    </div>  
                  </form>

                </div>
                <div class="tab-pane" id="material_miscellaneous_tab">
                  Empty Sales
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pamindo">Save</button>
      </div>
    </div>
  </div>
</div>