$(window).on({
	'load':function(){
		startCommon();
	}
});
function C(e){
	//console.log(e);
}

var _isMobile = false,
	_dropFlg  = false,
	_openFlg  = false,
	_speed    = 300;

//モバイルディテクション
function _getUA(){
	var _ua = navigator.userAgent;
	if( _ua.indexOf('iPhone') > 0 || _ua.indexOf('iPod') > 0 || _ua.indexOf('Android') > 0 ){
		_isMobile = true;
	}else{
		_isMobile = false;
	}
}
_getUA();

function startCommon(){
	$(".imgLiquid").imgLiquid();
	$(".hide").removeClass("hide").hide();
	$('#loadingIndicator').fadeOut(300);

	$(window).on({
		'resize':function(){
			var _x, _w;
			_x = 864; //フッター内容変更の境界ライン
			_w = $(window).width();
			if( _w = _x ){
				$('address').html("<address>〒819-0395<br>福岡市西区元岡744番地 九州大学伊都キャンパスウエスト 3号館 815号室<br><br>TEL:092-802-3436　FAX:092-802-3435 mail:info@kyudai-keikan.net</address>");
			}
		},
		'mousemove':function(e){
			if( _dropFlg ){
				var _flg = false;
				$(":hover").each(function(){
					if( $(this).hasClass("DropDownMenu") || $(this).hasClass("openDropDownMenu") ){
						_flg = true;
					}
				});
				if( !_flg ){
					_dropFlg = false;
					$(".DropDownMenu").slideUp( _speed );
				}
			}
		}
	});

	$(".go_top").on({
		'click':function(){
			C("GOING UP...");
			$('html,body').animate({scrollTop:0},'slow');
		}
	});

	$(".openDropDownMenu").on({
		'mouseenter':function(){
			if( !_isMobile && $(window).width() > 574 ){
				_dropFlg = true;
				$(".DropDownMenu").slideDown( _speed );
			}
		},
		'click':function(e){
			if( !_isMobile && $(window).width() > 574 ){
				if( $("body").attr("data-class") == "index" ){
					e.preventDefault();
					$("html,body").animate( { scrollTop : ( $('#index__works').offset().top - $("header").outerHeight() ) }, _speed );
					_dropFlg = false;
					$(".DropDownMenu").slideUp( _speed );
				}
			}else{
				e.preventDefault();
				_dropFlg = true;
				if( _openFlg ){
					$(".DropDownMenu").slideUp( _speed );
					_openFlg = false;
				}else{
					$(".DropDownMenu").slideDown( _speed );
					_openFlg = true;
				}
			}
		}
	});

	$("#panel-btn").on({
		'click':function(e){
			e.preventDefault();
			$("#panel").slideToggle(200);
			$("#panel-btn-icon").toggleClass("close");
		}
	});
	$(".dropdown > li").on({
		'click':function(e){
			e.preventDefault();
			$(this).toggleClass('dropdown_toggle').children('submenu').slideToggle(200);
			$(".DropDownMenu").show();
		}
	});
}

;(function($){
	$.fn.squarelize = function(){
		this.each(function(){
			var $this = $(this),
				thisW = $this.width();

			$(window).on({
				'resize':function(){
					$this.doit();
				}
			});

			$this.doit = function(){
				if( getComputedStyle ){
					thisW = getComputedStyle( $this.get(0), '' );
					thisW = thisW.getPropertyValue('width');
					thisW = Math.floor(thisW.replace('px',''));
				}else{
					thisW = $this.width();
				}
				$this.css({'height':thisW+'px'});
				if( $this.hasClass("imgLiquid") ){
					$this.imgLiquid();
				}
			}

			$this.doit();
		});
		return this;
	};
	$.fn.fixLiquid = function(){
		this.each(function(){
			var $this = $(this),
				$img  = $this.find("img"),
				_href = $img.prop("src");

			$this.fixize = function(){
				$img.css({'display':'none'});
				$this.css({'backgroundImage':'url('+_href+')','backgroundSize':'contain','backgroundPosition':'center center','backgroundRepeat':'no-repeat'});
			}

			$this.fixize();
		});
		return this;
	};
}(jQuery));