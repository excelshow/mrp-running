<div id="delete-modal" class="modal fade in">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this data?</p>
            </div>
            <div class="modal-footer">
                    <a id="delete-modal-cancel" href="#" class="btn btn-dark waves-effect waves-light" data-dismiss="modal">Cancel</a>
                    <form id="destroy" action="" method="post" style="display: inline" >
                      {{csrf_field()}}
                      {{method_field('DELETE')}}  
                      <button class="btn btn-danger">Delete</button>
                    </form>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function() {

         jQuery(document).on('click', '#deleteModal', function(e) {
            var url = jQuery(this).attr('data-href');
            $('#destroy').attr('action', url );
            $('#import').attr( 'method', 'delete' );
            $('#delete-modal').modal('show');
            e.preventDefault();
        });
    });
</script>
