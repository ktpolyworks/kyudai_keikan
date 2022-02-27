<?php
/*
Template Name: WORK 子ページ（カテゴリ3）
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__section">
					<div class="topImage imgLiquid">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top3.jpg">
					</div>
				</div>
				<div class="eyeCatch__section eyeCatch__section--2">
					<div class="eyeCatch__section__title">地域の風景を守り活かす<h1 class="mincho">ルールづくり</h1></div>
					<div class="eyeCatch__section__note">
						景観研究室では、地域全体の景観形成や構造物デザインのルールづくりにも取り組んでいます。地域の人々や行政職員が理念や方針を共有することで、地域固有の風景をしっかり受け継いでいくことが可能となるのです。
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix">
				<div class="section__list">
					<a href="/work/rules/example3-1"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top3-2.jpg">
						<div class="box__header mincho">志摩町風景のガイドライン</div>
					</div></a>
					<a href="/work/rules/example3-2"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top3-3.jpg">
						<div class="box__header mincho">筑後川景観設計の手引き</div>
					</div></a>
				</div>
			</div>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>