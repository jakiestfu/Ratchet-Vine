$(document).ready(function(){
	
	var snapper = new Snap({
		element: document.getElementById('content')
	});
	
	$(document).on('click', '#toggle-left', function(){
		snapper.open('left');
	});
	
	$(document).on('click', '#toggle-right', function(){
		snapper.open('right');
	});
	
	$(document).on('click', 'a[href="#"]', function(e){ e.preventDefault(); });
	
});
