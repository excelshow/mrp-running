<script type="text/javascript">
  $.validate({
   
  });

$('#btn2').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$('#btn3').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$('#btn5').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$(document).ready(function() {
    $("body").on("click","#add-more",function(){ 
        var html = $("#form").first().clone();
      
          $(html).find(".change").append("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>-</a>");
        $("#form").last().after(html);
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents("#form").remove();
    });
});

$('#btn4').click(function(){
        $.ajax({
            type: 'post',
            url: '/custorder/store',
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(data) {
                window.location = "/custorder";
            }
        });
    });


$('#btn6').click(function(){
        $.ajax({
            type: 'post',
            url: '/custorder/confirm',
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(data) {
                window.location = "/custorder";
            }
        });
    });
$('#btn7').click(function(){
        $.ajax({
            type: 'post',
            url: '/custorder/cancel',
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(data) {
                window.location = "/custorder";
            }
        });
    });
</script>