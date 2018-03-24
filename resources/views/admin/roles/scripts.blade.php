<script type="text/javascript">
  $.validate({
   
  });
$(document).ready(function () {
    $('#checkBtn').click(function() {
      var checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});

</script>
<script language="JavaScript">
function toggle(source) {
	var checkboxes = document.getElementsByName('permission[]');
	for(var i=0, n=checkboxes.length;i<n;i++) {
	checkboxes[i].checked = source.checked;
	}
};
</script>