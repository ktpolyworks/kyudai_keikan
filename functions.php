<?php
function get_most_parent_pageID( $_post = '' ){
	global $post;
	if( $_post == '' ){ $_post == $post->ID; }
	$_parent = get_post( $_post )->post_parent;
	$most_par_id = $_post;
	while( $_parent ){
		$par_post = get_post($_parent);
		$most_par_id = $par_post->ID;
		$_parent = $par_post->post_parent;
	}
	return $most_par_id;
}

function qd_blog_comments_theme( $_com, $_args, $_depth ){
?>
<li id="comment-<?php comment_ID(); ?>">
	<div class="comment__author">
		<?php printf( __( '%s <span class="says">:' ), get_comment_author_link() ); ?>
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '[ 編集する ]' ), '  ', '' ); ?>
		</span>
	</div>
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br>
	<?php endif; ?>
	<div class="comment__body">
		<?php comment_text(); ?>
	</div>
	<div class="comment__reply">
		<button><?php comment_reply_link( array_merge( $_args, array( 'add_below' => 'comment', 'depth' => $_depth, 'max_depth' => $_args['max_depth'] ) ) ); ?></button>
	</div>
</li>
<?php
}
?>