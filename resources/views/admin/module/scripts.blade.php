<script type="text/javascript">
  $.validate({
   
  });
  $(document).ready(function(){
        $("#modal-edit").on("show.bs.modal", function (event) {
            var idx = $(event.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : "GET",
                url : "{{url('/module/edit')}}"+"/"+ idx,
                success : function(data){
                $(".hasil-data").html(data);//menampilkan data ke dalam modal
                $("#myModule").attr('action',"{{url('/module/update')}}"+"/"+ idx);
                }
            });
         });
        $('#icons i').click(function () {
          var iconElement = $(this).attr('class');
          $('input[name=icon]').val(iconElement);
          console.log(iconElement);
        });
        $("body").on("click","#add-more",function(){ 
          // var html = $(".form-module").first().clone();
          console.log("addnew");

          var dom = $(`<div class="form-module form-group">
            <div class="col-md-12">
              Name : <input type="text" name="submodule_name[]">
              Link : <input type="text" name="submodule_link[]">
              <span id="action">
                <a id="add-more" class="btn btn-primary">+</a>
                <a class='btn btn-danger remove'>-</a>
              </span>
            </div>
          </div>`);

          $('#form-module-container').append(dom);
        });

        $("body").on("click",".remove",function(){ 
            $(this).parents(".form-module").remove();
        });
    });
    $(document).on("change" , "#sub_module" , function(){
     if($(this).val() == 1){
      console.log('test');
       $('.form-module').attr('style','display:block');
     }
     else{
       $('.form-module').attr('style','display:none');
     }
     
   });

</script>