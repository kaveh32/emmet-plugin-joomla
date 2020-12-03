jQuery(document).ready(function($) {
	var element='<span class="emmet-powered" style="font-family: sans-serif;font-size: 11px;color: #0072bc;cursor: pointer;border-bottom: 1px dashed #0072bc;" >Powered by Emmet</span>';
	$('.editor-border').prepend(element);
	$('.emmet-powered').click(function(){
		emmet.require('textarea').showInfo();
	});	
});


