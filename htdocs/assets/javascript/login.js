$(function(){
	// remove the captcha's script element
	$('#captcha script').remove();
	// set up tabs
	$('.tabs').tabs({
		show:function(event,ui){
			// if the captcha is already here, return
			if($('#captcha',ui.panel).length)return;
			// move the captcha into this panel
			$('table tr:last',ui.panel).before($('#captcha'));
		}
	});
});
