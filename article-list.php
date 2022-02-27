<article class="article">
	<div class="article__time"><?php print get_post_time('F j, Y'); ?></div>
	<div class="article__title mincho"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
	<div class="article__main">
		<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
		<?php the_content('続きを読む'); ?>
	</div>
</article>