<?php
/*
Template Name: WORK 子ページ（カテゴリ4）
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__section">
					<div class="topImage image_top4">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top4.jpg">
					</div>
				</div>
				<div class="eyeCatch__section eyeCatch__section--2">
					<div class="eyeCatch__section__title">自然を活かした地域再生の<h1 class="mincho">シナリオづくり</h1></div>
					<div class="eyeCatch__section__note">
						地域の資源を生かした独自の地域再生が九州各地で求められています。地域住民が主体となり、その地域の歴史や文化、風景、コミュニティを活かしながら、再生へのシナリオ、ずっとまちづくりを続けていくための道標をつくることも、九大景観研の仕事のひとつです。
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix">
				<div class="section__list">
					<a href="/work/scenario/example4-1"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top4-2.jpg">
						<div class="box__header mincho">俵ケ浦半島トレイル</div>
					</div></a>
				</div>
			</div>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>