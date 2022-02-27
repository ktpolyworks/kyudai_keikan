$(window).on({
	'load':function(){
		startProgram();
	}
});

function startProgram(){
	$(".article__main").find("img").each(function(){
		$(this).attr('org-width',$(this).attr("width"));
	});
	$(window).on({
		'resize':function(){
			setBlogImageSize();
		}
	});
	setBlogImageSize();
}

function setBlogImageSize(){
	C('set size');
	if( _isMobile || $(window).width() < 700 ){
		$(".article__main").find("img").each(function(){
			$(this).attr('width','100%').attr("height","");
		});
	}else{
		$(".article__main").find("img").each(function(){
			$(this).attr('width',$(this).attr("org-width")+'px');
		});
	}

	$(".article__main").find("img").each(function(){
		if($(this).width() > $('.blog__main').width()){
			$(this).attr('width','100%').attr("height","");
		}
	});
}