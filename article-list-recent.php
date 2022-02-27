<article>
	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><div class="thumbnail imgLiquid"><?php
	$_args = [
		'post_type' => 'attachment',
		'posts_per_page' => 1,
		'post_status' => null,
		'post_parent' => $post->ID
	];
	$_at = get_posts( $_args );
	/*if( $_at ){
		foreach( $_at as $ats ){
			print the_attachment_link( $ats->ID, false );
		}
	}else{
		print '<img src="'.get_template_directory_uri().'/img/blog/noimage.png">';
	}*/
	$_body = get_the_content();
	$_img_check = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $_body, $_imgs);
	$_img_thum  = $_imgs[1][0];
	if( $_img_thum != "" ){
		print '<img src="'.$_img_thum.'">';
	}else{
		print '<img src="'.get_template_directory_uri().'/img/blog/noimage.png">';
	}
	?></div></a>
	<div class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
	<div class="time"><?php print get_post_time('F j, Y'); ?></div>
</article>