(function($) {
  'use strict';

$(document).ready(function($) {

	$('.social-color-field').wpColorPicker();

	$('.set-icon-field').click(function(){
		$(this).parent().toggleClass('active');
	});

	$('.icon-list span i').click(function(){
		var className = $(this).attr("class");
		var icon_field = $( this ).parents().siblings('.set-icon-field');
		console.log(className);
		icon_field.val(className);
		$( this ).parents().removeClass('active');
	});

});


	// on upload button click
	$('body').on( 'click', '.misha-upl', function(e){

		e.preventDefault();

		var button = $(this),
		custom_uploader = wp.media({
			title: 'Insert image',
			library : {
				// uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
				type : 'image'
			},
			button: {
				text: 'Use this image' // button label text
			},
			multiple: false
		}).on('select', function() { // it also has "open" and "close" events
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			button.html('<img src="' + attachment.url + '">').next().show().next().val(attachment.id);
		}).open();
	
	});

	// on remove button click
	$('body').on('click', '.misha-rmv', function(e){

		e.preventDefault();

		var button = $(this);
		button.next().val(''); // emptying the hidden field
		button.hide().prev().html('Upload image');
	});


})(jQuery);