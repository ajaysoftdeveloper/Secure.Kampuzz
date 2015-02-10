/*for CSS changer*/

	if($.cookie("css")) {
		$("#test22").prop("href",$.cookie("css"));
	}

	$("#c_change a").click(function() { 
		$("#test22").attr("href",$(this).attr('rel'));
		$.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
		return false;
	});

/*End*/


/*for left slide Panel */

	
	if($.cookie("xyz")=="hide") {
		
		$("#slider").animate({marginLeft:"-15.9%"},10);
		$("#topMenuImage").html('<div id="open_btn"></div>');
		$("#openCloseWrap").css({"background":"#fff"});
		$(".right-body").animate({"width":"99.2%"},10);
		$("#openCloseIdentifier").hide();	
		
	}
	
	else{
		$("#slider").animate({marginLeft:"0%"},10);
		$("#topMenuImage").html('<div id="close_btn"></div>');
		$("#openCloseWrap").css({"background":"none"});
		$(".right-body").animate({"width":"83.3333%"},10);
		$("#openCloseIdentifier").show();	
		
	}
	
	
	
  

 $(".topMenuAction").click(function(){


	if($("#openCloseIdentifier").is(":visible")){
		
		$("#slider").animate({marginLeft:"-15.9%"},10);
		$("#topMenuImage").html('<div id="open_btn"></div>');
		$("#openCloseWrap").css({"background":"#fff"});
		$(".right-body").animate({"width":"99.2%"},10);
		$("#openCloseIdentifier").hide();
		$.cookie("xyz","hide", {expires: 365, path: '/'});
	}

	else{
		$("#slider").animate({marginLeft:"0%"},10);
		$("#topMenuImage").html('<div id="close_btn"></div>');
		$("#openCloseWrap").css({"background":"none"});
		$(".right-body").animate({"width":"83.3333%"},10);
		$("#openCloseIdentifier").show();	
		$.cookie("xyz","visible", {expires: 365, path: '/'});	
	}
	console.log($.cookie("xyz"));
  });
 


/*End*/



/*for Dropdown on Hover*/

$(function(){
	$('.dropdown').hover(function() {
		$(this).addClass('open');
	}, function() {
		$(this).removeClass('open');
	});
});
				
/*End*/


/*for Moving boxes in Home page */
 $(function () {
	$(".grid").sortable({
		tolerance: 'pointer',
		revert: 'invalid',
		placeholder: 'col-md-4 placeholder tile',
		forceHelperSize: true
	});
 });
/*End */






/* For Drop Search ul li Selection on top  */
$( document ).ready(function() {
	$('#search_list li').click(function() {
		$('#shidden').val($(this).text());
		$('#searchbar').prop("placeholder",$(this).text());
	});
});
/* End  */


/*Json file */
	
	$(document).ready(function() {
	
		$.getJSON('data.json', function(info){
	
				var output='';
				for (var i = 0; i <= info.links.length-1; i++) {
					for (key in info.links[i]) {
						if (info.links[i].hasOwnProperty(key)) {
							output += '<li>' + 
							'<a href = "' + info.links[i][key] +
							'">' + key + '</a>';
							'</li>';
					}   
					}
				}
				
				var update = document.getElementById('links');
				update.innerHTML = output;
	
		}); //getJSON
	
	}); // ready
	





/*For Disabled nav tabs li*/
$( document ).ready(function() {
	$('.nav-tabs li').click(function(event){
		if ($(this).hasClass('disabled')) {
			return false;
		}
	});
});
/*End*/


/*for Color Picker */

$( document ).ready(function() {
	$(function(){
		window.prettyPrint && prettyPrint()
		$('#cp1').colorpicker({
		format: 'hex'
		});
		$('#cp2').colorpicker();
		$('#cp3').colorpicker();
		var bodyStyle = $('body')[0].style;
		$('#cp4').colorpicker().on('changeColor', function(ev){
		bodyStyle.backgroundColor = ev.color.toHex();
		});
	});
});

/*End*/


/*Datepicker and time Picker */

$( document ).ready(function() {
	$(function () {
		$('#datetimepicker1').datetimepicker({
			pickTime: false
		});
	});
	
	 $(function () {
		$('#datetimepicker2').datetimepicker();
	});
	
	$(function () {
		$('#datetimepicker3').datetimepicker({
			pickDate: false
		});
	});
	
	$(function () {
		$('#datetimepicker4').datetimepicker();
	});
	
	$(function () {
		$('#datetimepicker5').datetimepicker({
			defaultDate: "05/03/14",
			disabledDates: [
				moment("05/06/2014"),
				new Date(2014, 05 - 10, 14),
				"05/03/2014 5:53"
			]
		});
	});

});
/*End */

/*for UI Spinner  */
$( document ).ready(function() {
	$("input[name='demo1']").TouchSpin({
		min: 0,
		max: 100,
		step: 0.1,
		decimals: 2,
		boostat: 5,
		maxboostedstep: 10,
		postfix: '%'
	});
	
	$("input[name='demo2']").TouchSpin({
		min: -1000000000,
		max: 1000000000,
		stepinterval: 50,
		maxboostedstep: 10000000,
		prefix: '$'
	});
	
	$("input[name='demo3']").TouchSpin({
		initval: 40
	});
	
	$("input[name='demo4']").TouchSpin({
		postfix: "button",
		postfix_extraclass: "btn btn-primary btn-sm"
	});
});
/* End  */



/*for TextArea Counter*/
$( document ).ready(function() {
	$('input.maxLenght').maxlength({
		threshold: 25
	});
	
	$('textarea.max_text_area').maxlength({
		threshold: 250,
		separator: ' of ',
		preText: 'You have ',
		postText: ' chars remaining.',
	});
});

/* End  */

/*for Switch Buttons*/
/*$( document ).ready(function() {
	$('.radio1').on('switch-change', function () {
	$('.radio1').bootstrapSwitch('toggleRadioState');
	});
	// or
	$('.radio1').on('switch-change', function () {
	$('.radio1').bootstrapSwitch('toggleRadioStateAllowUncheck');
	});
	// or
	$('.radio1').on('switch-change', function () {
	$('.radio1').bootstrapSwitch('toggleRadioStateAllowUncheck', false);
	});
	
	$('.btn-toggle').click(function() {
	$(this).find('.btn').toggleClass('active');  
	
	if ($(this).find('.btn-primary').size()>0) {
	$(this).find('.btn').toggleClass('btn-primary');
	}
	if ($(this).find('.btn-danger').size()>0) {
	$(this).find('.btn').toggleClass('btn-danger');
	}
	if ($(this).find('.btn-success').size()>0) {
	$(this).find('.btn').toggleClass('btn-success');
	}
	if ($(this).find('.btn-info').size()>0) {
	$(this).find('.btn').toggleClass('btn-info');
	}
	
	$(this).find('.btn').toggleClass('btn-default');
	
	});
	
	$('form').submit(function(){
	$(".alert").alert($(this["options"]).val());
	return false;
	});
});*/

/* End  */


/*for Password Generator*/
$( document ).ready(function() {
	$('#demo').pGenerator({
	'bind': 'click', // Bind an event to #myLink which generate a new password when raised;
	'passwordElement': '#my-input-element', // Selector for the form input which will contain the new generated password;
	'displayElement': '#my-display-element', // Selector which will display the new generated password;
	'passwordLength': 16, // Length of the generated password.
	'uppercase': true, // Password will contain uppercase letters;
	'lowercase': true, // Password will contain lowercase letters;
	'numbers':   true, // Password will contain numerical characters;
	'specialChars': true, // Password will contain numerical characters;
	'onPasswordGenerated': function(generatedPassword) {
	$(".alert").alert('My new generated password is ' + generatedPassword); // Callback function which will be called each time a new password is generated;
	}
	});
});
/* End  */

/* For Combo Box  */
$( document ).ready(function() {
 $('.selectpicker').selectpicker();
});
/* End  */



/* For Select2 Box  */
$( document ).ready(function() {
	$("#e1").select2();
	
	$("#e2").select2({
		placeholder: "Select a State",
		allowClear: true
	});
	
	$("#e3").select2({
		placeholder: "Select a State"
	});
});

/* End  */




/* For Table Check box Disable Enable Delete Edit Button */
$( document ).ready(function() {

	$(".case").click(function(e){
	   
	  var arr = new Array();
	  var count=0;
	//var query_string = '';
	$("input[type='checkbox'][name='case']").each(function(){
		
	   if(this.checked){
			count++;
		  arr.push($(this).val());
		   //query_string+="checkbox_name[]"+this.val();
	   }
	   });
	if(count>1)
		{  
			$(".test345").addClass("disabled");
		}
	else{  
		   $(".test345").removeClass("disabled");
		   
		}
	});
});


/* End  */




/*For Text Editor  */
$( document ).ready(function() {
	$(function(){
	function initToolbarBootstrapBindings() {
	var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
	'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
	'Times New Roman', 'Verdana'],
	fontTarget = $('[title=Font]').siblings('.dropdown-menu');
	$.each(fonts, function (idx, fontName) {
	fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
	});
	$('a[title]').tooltip({container:'body'});
	$('.dropdown-menu input').click(function() {return false;})
	.change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
	.keydown('esc', function () {this.value='';$(this).change();});
	
	$('[data-role=magic-overlay]').each(function () { 
	var overlay = $(this), target = $(overlay.data('target')); 
	overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
	});
	if ("onwebkitspeechchange"  in document.createElement("input")) {
	var editorOffset = $('#editor').offset();
	$('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
	} else {
	$('#voiceBtn').hide();
	}
	};
	function showErrorAlert (reason, detail) {
	var msg='';
	if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
	else {
	console.log("error uploading file", reason, detail);
	}
	$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
	'<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	};
	initToolbarBootstrapBindings();  
	$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
	window.prettyPrint && prettyPrint();
	});
});

/*End */


/*for Validation */

$( document ).ready(function() {
	$('#attributeForm').bootstrapValidator();
	$('#attributeForm2').bootstrapValidator();
	$('#attributeForm3').bootstrapValidator();
	
	$('#buttonGroupForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        // Since the Bootstrap Button hides the radio and checkbox
        // We exclude the disabled elements only
        excluded: ':disabled',
        fields: {
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            'languages[]': {
                validators: {
                    choice: {
                        min: 1,
                        max: 2,
                        message: 'Please choose 1 - 2 languages you can speak'
                    }
                }
            }
        }
    });
	
	
});

/*End*/

/* For Multiselect */

$( document ).ready(function() {
	$('#my-select').multiSelect();
	$('#pre-selected-options').multiSelect();
	$('#keep-order').multiSelect({ keepOrder: true });
	$('#optgroup').multiSelect({ selectableOptgroup: true });
	
	$('#custom-headers').multiSelect({
	selectableHeader: "<div class='custom-header'>Selectable items</div>",
	selectionHeader: "<div class='custom-header'>Selection items</div>"
	});
	
	
	$('#custom-headers2').multiSelect({
	  selectableHeader: "<input type='text' class='search-input form-control' autocomplete='off' placeholder='try \"12\"'>",
	  selectionHeader: "<input type='text' class='search-input form-control' autocomplete='off' placeholder='try \"4\"'>",
	  afterInit: function(ms){
		var that = this,
			$selectableSearch = that.$selectableUl.prev(),
			$selectionSearch = that.$selectionUl.prev(),
			selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
			selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';
	
		that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
		.on('keydown', function(e){
		  if (e.which === 40){
			that.$selectableUl.focus();
			return false;
		  }
		});
	
		that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
		.on('keydown', function(e){
		  if (e.which == 40){
			that.$selectionUl.focus();
			return false;
		  }
		});
	  },
	  afterSelect: function(){
		this.qs1.cache();
		this.qs2.cache();
	  },
	  afterDeselect: function(){
		this.qs1.cache();
		this.qs2.cache();
	  }
	});
	
});	

/* End  */


/*for close boxes in Home page */
$('.close_box').click(function() {
	$(this).parents('.tile').hide();
});
/*End*/


/*for Expand boxes in Home page */

function abc(ob,number) {
	
	//var a = $(ob).parents('.tile') ;
	if($(ob).parents('.tile').hasClass('col-md-6')) {
		$(ob).parents('.tile').removeClass('col-md-6');
		$(ob).parents('.tile').addClass('col-md-'+number);	
	}
	 else if($(ob).parents('.tile').hasClass('col-md-12')) {
		$(ob).parents('.tile').removeClass('col-md-12');
		$(ob).parents('.tile').addClass('col-md-'+number);	
	}
	else if($(ob).parents('.tile').hasClass('col-md-4')) {
		
		$(ob).parents('.tile').removeClass('col-md-4');
		$(ob).parents('.tile').addClass('col-md-'+number);	
	} 
	
};

/*End*/
	


/*for resposive tab */
$('.nav-tabs').tabdrop();
/*End */	






/* For Pricing Slider Box  */

	$("#slider_a").slider({
	  animate: true,
	  value:1,
	  min: 0,
	  max: 1000,
	  step: 10,
	  slide: function(event, ui) {
		  update(1,ui.value); //changed
	  }
	});
	
	$("#slider_b").slider({
	  animate: true,
	  value:0,
	  min: 0,
	  max: 500,
	  step: 1,
	  slide: function(event, ui) {
		  update(2,ui.value); //changed
	  }
	});
	
	//Added, set initial value.
	$("#amount").val(0);
	$("#duration").val(0);
	$("#amount-label").text(0);
	$("#duration-label").text(0);
	
	update();
	
	
	//changed. now with parameter
	function update(slider,val) {
	//changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
	var $amount = slider == 1?val:$("#amount").val();
	var $duration = slider == 2?val:$("#duration").val();
	
	/* commented
	$amount = $( "#slider" ).slider( "value" );
	$duration = $( "#slider2" ).slider( "value" );
	*/
	
	$total = "$" + ($amount * $duration);
	$( "#amount" ).val($amount);
	$( "#amount-label" ).text($amount);
	$( "#duration" ).val($duration);
	$( "#duration-label" ).text($duration);
	$( "#total" ).val($total);
	$( "#total-label" ).text($total);
	
	$('#slider_a a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
	$('#slider_b a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
	}

/* End  */



/* For Checkbox Select All Button */
	
$(function() {
	$('#selectall').change(function(){
		var checkboxes = $(this).closest('form').find(':checkbox');
		if($(this).prop('checked')) {
		  checkboxes.prop('checked', true);
		} else {
		  checkboxes.prop('checked', false);
		}
	  });
});

/* End  */

	