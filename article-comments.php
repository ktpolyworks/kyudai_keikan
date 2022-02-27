<?php

$_com_fields = [
	'author' => '',
	'email' => '',
	'url' => '',
];

$_com_author = ( $commenter['comment_author'] == "" )? '匿名ユーザー' : $commenter['comment_author'];
$_com_email  = ( $commenter['comment_author_email'] == "" )? 'hoge@hoge.com' : $commenter['comment_author_email'];

$_com_field = ( is_user_logged_in() )? '<div class="__form"><ul><li class="li1">コメント*</li><li class="li2"><textarea class="comment__forms" id="comment" name="comment" placeholder="コメントを入力してください" required></textarea></li></ul></div>' : '<div class="__form"><ul><li class="li1">お名前</li><li class="li2"><input id="author" class="comment__forms" name="author" type="text" value="' . $_com_author . '" "' . $aria_req . '></li></ul><ul><li class="li1">メールアドレス</li><li class="li2"><input id="email" class="comment__forms" name="email" type="text" value="' . $_com_email . '" ' . $aria_req . '></li></ul><ul><li class="li1">コメント*</li><li class="li2"><textarea class="comment__forms" id="comment" name="comment" placeholder="コメントを入力してください" required></textarea></li></ul></div>';

$_com_arg = [
	'title_reply' => '<div class="section__title__bar section__title__bar--1"><div class="__box"></div></div><div class="section__title__bar section__title__bar--2"><div class="__box"></div><div class="__title mincho">コメントを追加</div></div>',
	'label_submit' => 'コメントを投稿する',
	'comment_notes_after' => "",
	'logged_in_as' => '<div class="__log"><i class="ion-information-circled"></i> * が付いている欄は必須項目です<br><i class="ion-checkmark-round"></i> '.sprintf( __( '<a href="%1$s">%2$s</a>さんでログイン中です - [ <a href="%3$s" title="Log out of this account">ログアウトする</a> ]' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ).'</div>',
	'must_log_in' => '<div class="__log"><i class="ion-information-circled"></i> '.sprintf( __( 'コメントを投稿するには <a href="%s">ログイン</a> する必要があります' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ).'</div>',
	'comment_field' => $_com_field,
	'fields' => apply_filters( 'comment_form_default_fields', $_com_fields )
];

$_com_list_arg = [
	'style' => 'ul',
	'per_page' => '20',
	'reverse_top_level' => true,
	'page' => '1',
	'avatar_size' => '0',
	'reply_text' => '<i class="ion-forward"></i> 返信する',
	'callback' => 'qd_blog_comments_theme'
];

?><div class="blog__comments">
	<div class="section__title__bar section__title__bar--1"><div class="__box"></div></div><div class="section__title__bar section__title__bar--2"><div class="__box"></div><div class="__title mincho"><?php print get_the_title(); ?>へのコメント</div></div>
	<?php if(have_comments()): ?>
		<div class="comment__section">
			<ul class="commentlist">
			<?php wp_list_comments( $_com_list_arg ); ?>
			</ul>
		</div>
	<?php endif; ?>
	<div class="comment__section">
		<?php comment_form( $_com_arg ); ?>
	</div>
</div>