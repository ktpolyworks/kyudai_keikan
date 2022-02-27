<?php
/*
Template Name: WORK ページ
*/
get_header(); ?>
	<main>
		<section class="eyeCatch eyeCatch--shrinked">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
			</div>
		</section>
		<section class="works__list">
			<?php get_template_part( 'work', 'list' ); ?>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>