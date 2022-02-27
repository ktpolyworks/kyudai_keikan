$(window).on({
	'load':function(){
		starProgram();
	}
});

var e;

function starProgram(){
	$(".cinfirmMessage").off("click").on({
		'click':function(){
			$("#alertMessage, #notifyMessage").html('');
			var v1 = $('#contactform-name').val(),
				v2 = $('#contactform-email').val(),
				v3 = $('#contactform-title').val(),
				v4 = $('#contactform-body').val();
			if(v1.length>0 && v2.length>0 && v3.length>0 && v4.length>0){
				$('.contactModal').fadeIn(300);
				$("#confirm-name").html(v1);
				$("#confirm-email").html(v2);
				$("#confirm-title").html(v3);
				$("#confirm-body").html(v4);
			}else{
				$("#alertMessage").html('【ご注意】 すべての項目を入力してください');
			}
		}
	});

	$(".execSubmit").off("click").on({
		'click':function(){
			$("#alertMessage").html('');
			var v1 = $('#contactform-name').val(),
				v2 = $('#contactform-email').val(),
				v3 = $('#contactform-title').val(),
				v4 = $('#contactform-body').val();
			if(v1.length>0 && v2.length>0 && v3.length>0 && v4.length>0){
				$(".execSubmit").html('送信しています...');
				sendMessage(v1, v2, v3, v4);
			}else{
				$("#alertMessage").html('【ご注意】 すべての項目を入力してください');
				$(".closeModal").trigger("click");
			}
		}
	});

	$(".closeModal").off("click").on({
		'click':function(){
			$('.contactModal').fadeOut(300);
		}
	});
}

function sendMessage(v1, v2, v3, v4){
	$(".alertMessage, .notifyMessage").html('');
	$.ajax({
		url: $(".contactForm").attr("data") + '.php',
		type: 'POST',
		data: {
			v1: v1,
			v2: v2,
			v3: v3,
			v4: v4,
		},
		//dataType: 'json'
	}).done(function(e){
		e = JSON.parse(e);
		C(e);
		if(e.result){
			$(".closeModal").trigger("click");
			$("#notifyMessage").html('メッセージを送信しました');
		}else{
			$("#alert-general").html('送信に失敗しました。再度お試しください。');
			if(e.error.name != ''){
				$("#alert-name").html(e.error.name);
			}
			if(e.error.email != ''){
				$("#alert-email").html(e.error.email);
			}
			if(e.error.title != ''){
				$("#alert-title").html(e.error.title);
			}
			if(e.error.body != ''){
				$("#alert-body").html(e.error.body);
			}
		}
		$(".execSubmit").html('送る');
	}).fail(function(e){
		C(e);
		$(".execSubmit").html('送る');
	});
}