<?php

/*

送信先等、こちらで設定してください

 */

$to = 'higuchi3333@gmail.com';
//確認用
#$to = 'shun.cats@gmail.com, seima.isogawa@gmail.com';

date_default_timezone_set('Asia/Tokyo');

$from_email = 'noreply@kyudai-keikan.net';
$from_name  = '九大景観研究室';
$post       = [];

foreach($_POST as $k => $v){
	$post[$k] = htmlspecialchars($v);
}

$error = [
	'name' => '',
	'email' => '',
	'title' => '',
	'body' => '',
];
$result = false;

$v1 = $post['v1'];
$v2 = $post['v2'];
$v3 = $post['v3'];
$v4 = $post['v4'];

if($v1 == '' || $v2 == '' || $v3 == '' || $v4 == ''){
	if($v1 == ''){
		$error['name'] = 'お名前を入力してください';
	}
	if($v2 == ''){
		$error['email'] = 'メールアドレスを入力してください';
	}
	if($v3 == ''){
		$error['title'] = '件名を入力してください';
	}
	if($v4 == ''){
		$error['body'] = 'お問い合わせ内容を入力してください';
	}
}else if(!filter_var($v2,FILTER_VALIDATE_EMAIL)){
	if($v2 == ''){
		$error['email'] = '正しいメールアドレスを入力してください';
	}
}else{
	//sendmail
	mb_language("ja");
	mb_internal_encoding('UTF-8');
	$from     = mb_encode_mimeheader(mb_convert_encoding($from_name,"UTF-8","UTF-8"))."<".$from_email.">";
	$now_time = date('Y年n月j日 H時i分');

	$email    = $v2;
	$subject  = 'お問い合わせを受け付けました 【九大景観研究室】';
$message1     = <<< MSG
こちらは九大景観研究室です。
この度はウェブサイトよりお問い合わせをいただき、ありがとうございます。

内容を確認し、ご連絡を差し上げますので、今しばらくお待ちください。
なお、内容によっては返信いたしかねる場合もございますことを、予めご了承ください。


九大景観研究室


※このメールは送信専用アドレスより送信されています。このメールには返信されませんようお願いしたします。
※このメールに心当たりがない場合は、お手数ですが破棄または無視していただきますようお願いしたします。
MSG;

	$message  = mb_convert_encoding($message1, 'ISO-2022-JP-MS');
	$try1     = mb_send_mail($email,$subject,$message,"From:".$from);

	$email    = $to;
	$subject  = 'ウェブサイトよりお問い合わせがありました 【'.$v3.'】';

$message2     = <<< MSG
こちらは九大景観研究室ウェブサイトです。
ウェブサイトよりお問い合わせがありました。

--------------------------------------------
【日時】 {$now_time}
【お名前】 {$v1}
【メールアドレス】 {$v2}
【件名】 {$v3}
【内容】 {$v4}
--------------------------------------------

九大景観研究室ウェブサイト
MSG;

	$message = mb_convert_encoding($message2, 'ISO-2022-JP-MS');
	$try2 = mb_send_mail($email,$subject,$message,"From:".$from);

	if($try1 && $try2){
		$result = true;
	}
}

//return
$return = [
	'result' => $result,
	'error'  => $error
];

$json = json_encode($return);
echo $json;
?>