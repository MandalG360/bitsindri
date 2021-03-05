$(".gallery a").click(function(evenet){
	var pop_img = $(this).attr('href');
	$("body").append('<div class="pop-img-wrap"><div class="pop-img"><div class="pop-close">&times;</div><img src="'+pop_img+'"></div></div>');
	
	$(".pop-img-wrap").addClass('active');

	$(".pop-close").click(function(evenet){
		setTimeout(function(){
			$(".pop-img-wrap").addClass('dactive');
			$(".pop-img-wrap").remove();
		}, 100);
	});

	$(".pop-img-wrap").click(function(evenet){
		return false;
	});
	$(".pop-img").click(function(evenet){
		return false;
	});

	return false;
});

$(".achievement a").click(function(evenet){
	var pop_img = $(this).attr('href');
	$("body").append('<div class="pop-img-wrap"><div class="pop-img"><div class="pop-close">&times;</div><img src="'+pop_img+'"></div></div>');
	
	$(".pop-img-wrap").addClass('active');

	$(".pop-close").click(function(evenet){
		setTimeout(function(){
			$(".pop-img-wrap").addClass('dactive');
			$(".pop-img-wrap").remove();
		}, 100);
	});

	$(".pop-img-wrap").click(function(evenet){
		return false;
	});
	$(".pop-img").click(function(evenet){
		return false;
	});

	return false;
});