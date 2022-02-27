$(window).on({
	'load':function(){
		starProgram();
	}
});

function starProgram(){
	setFixsizeBG();
	$(".fixLiquid").fixLiquid();
	$(window).on({
		'resize':function(){
			setFixsizeBG();
		}
	});
}

function setFixsizeBG(){
	var _wholeW, _contW, _textW, _fixW, _url, _checkW;
	_wholeW  = $(window).width();
	_contW   = $(".contents").width();
	_textW   = $(".intro__body").width();
	_checkW  = 655;
	_fixW    = ( _wholeW <= _checkW )? _wholeW : ( ( _wholeW - _contW ) / 2 ) + ( _contW - _textW ) + 0;
	_url     = $(".work-main").attr("data-url");
	if( _wholeW <= _checkW ){
		$(".fixsize").css({'position':'relative','top':'0','left':'0','right':'0','bottom':'0','opacity':'1','backgroundPosition':'center center','width':'100%','height':'100%','background':'none'});
		$(".fixsize").html('<img src="'+_url+'img/maps/'+$(".fixsize").attr("data")+'" width="100%">');
		$(".eyeCatch__button").css({'height':'auto'});
	}else{
		if( _wholeW <= 1000 ){
			$(".fixsize").css({'position':'absolute','top':'','left':'','bottom':'0','opacity':'1','backgroundPosition':'','backgroundRepeat':'no-repeat'}).html("");
		}else{
			$(".fixsize").css({'position':'absolute','top':'','left':'','bottom':'0','opacity':'1','backgroundPosition':'center center','backgroundRepeat':'no-repeat'}).html("");
		}
		$(".fixsize").css({'width':_fixW+'px','height':'100%','backgroundImage':'url('+_url+'img/maps/'+$(".fixsize").attr("data")+')'});
		$(".eyeCatch__button").css({'height':( $(".fixsize").height() / 2 + 250 )+'px'});
	}
}