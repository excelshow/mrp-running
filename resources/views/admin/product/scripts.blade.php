<script type="text/javascript">
  $.validate({
   
  });
$(document).ready(function(){
  var stok_awal = $('#stok_awal').val();
 

  $('#add_stok').on('keyup change', function(e){
  	var tambah = $(this).val();
    var total = parseInt(tambah) + parseInt(stok_awal);
    $('#total').val(total);
	});
  });
</script>