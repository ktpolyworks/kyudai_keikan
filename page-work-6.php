<?php
/*
Template Name: WORK 子ページ（カテゴリ6）
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__section">
					<div class="topImage imgLiquid">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top6.jpg">
					</div>
				</div>
				<div class="eyeCatch__section eyeCatch__section--2">
					<div class="eyeCatch__section__title">自然を活かした新しいインフラのかたち<h1 class="mincho">グリーンインフラ</h1></div>
					<div class="eyeCatch__section__note">
						近年国内で急増する集中豪雨や自然災害の数々。これらの災害を自然物の力で受け流し、抑制する新しいインフラ整備の概念として「グリーンインフラ」が世界的に注目されています。九大景観研究室でも、木材や石材を積極的に活用したデザインに取り組んできました。今後も新しい「グリーンインフラ」的な取り組みのあり方を提案していきます。
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix">
				<div class="section__list">
					<a href="/work/green/example6-1"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top6-2.jpg">
						<div class="box__header mincho">グリーンインフラ（木材事例）</div>
					</div></a>
					<a href="/work/green/example6-2"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top6-3.jpg">
						<div class="box__header mincho">グリーンインフラ（石材事例）</div>
					</div></a>
				</div>
			</div>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>