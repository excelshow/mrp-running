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
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label">Quantity</label>
                  <input type="text" name="product_quantity" class="form-control">  
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label">Reference</label>
                  <input type="text" name="product_reference" class="form-control">  
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label">BoM Type</label>
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Manufacture this product
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Kit
                        </label>
                      </div>
                    </div>
                    
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </form>

        <div class="row">
          <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#components_tab" data-toggle="tab" aria-expanded="true">Components</a></li>
                <li class=""><a href="#material_miscellaneous_tab" data-toggle="tab" aria-expanded="false">Miscellaneous</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="components_tab">
                  Components
                </div>
                <div class="tab-pane" id="material_miscellaneous_tab">
                  Miscellaneous
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