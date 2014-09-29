$(document).ready(function() {
	$('.wrap-slide .bx-viewport').height($(window).height());
	$('#tabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
});