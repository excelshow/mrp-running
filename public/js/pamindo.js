var Pamindo = (function () {
	var module = {};

	module.init = function () {
		module.initTextInputDecimal();
	};

	module.initTextInputDecimal = function () {
		$('.decimal-input').keyup(function(){
		    var val = $(this).val();
		    if(isNaN(val)){
		         val = val.replace(/[^0-9\.]/g,'');
		         if(val.split('.').length>2) 
		             val =val.replace(/\.+$/,"");
		    }
		    $(this).val(val); 
		});
	};

	return module;

})();
jQuery(document).ready(function() {
	Pamindo.init();
});