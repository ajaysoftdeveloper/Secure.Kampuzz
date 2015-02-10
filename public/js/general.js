// datepicker
$('#mainpage .input-group.date').datepicker({
    autoclose: true,
	format: "dd-mm-yyyy",
    todayHighlight: true
	});
	
$(document).ready(function() {
	$('.nav-tabs').tabdrop();
	
        $('.tip').tooltip({
    trigger: 'click hover focus',
	html: true });		

    });
	
	
	$.fn.editable.defaults.mode = 'popup';
	
	$.fn.editableform.template = '<form class="editableform"><div class="control-group inputpadding"><div><div class="editable-input"></div><div class="editable-buttons"></div></div><div class="editable-error-block"></div></div></form>';