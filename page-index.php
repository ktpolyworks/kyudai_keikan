<?php
/*
Template Name: INDEX ページ
*/
get_header(); ?>
	<main>
		<section id="index__top" class="index__top">
			<video class="index__video" poster="<?php print get_template_directory_uri(); ?>/img/poster.png" preload="none" autoplay="on" loop="true" width="100%" muted="muted" webkit-playsinline playsinline><source src="<?php print get_template_directory_uri(); ?>/img/top.mp4?1" type="video/mp4"></video>
			<div class="cover"></div>
		</section>
		<section id="index__works">
			<h2>WORKS</h2>
			<?php get_template_part( 'work', 'list' ); ?>
		</section>
		<div class="gotoTop contents">
			<button class="go_top">PAGE TOP <div class="arrow"></div></button>
		</div>
	</main>
	<div class="index__cover" id="loadingIndicator">
		<div class="index__cover__loading xyCenter">
			<div class="windows8">
				<div class="wBall" id="wBall_1">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_2">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_3">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_4">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_5">
					<div class="wInnerBall"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- JS Files -->
	<!--[if lt IE 9]>
		<script src="//api.html5media.info/1.1.8/html5media.min.js"></script>
	<![endif]-->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/index.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>