<?php
/*
Template Name: WORK 子ページ（カテゴリ7）
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__section">
					<div class="topImage imgLiquid">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top7.jpg">
					</div>
				</div>
				<div class="eyeCatch__section eyeCatch__section--2">
					<div class="eyeCatch__section__title">多様性のある社会を実現する<h1 class="mincho">インクルーシヴデザイン</h1></div>
					<div class="eyeCatch__section__note">
						国連が定めた持続可能な開発目標（SDGs）は、これからの社会や地域をデザインするための指標として注目されています。“誰も取り残さない”社会を実現するため、景観研究室では障がい者や各領域の専門家と連携し、インフラや空間づくりに新しい仕組みや技術を取り入れ、これからの時代にふさわしい未来型のインクルーシヴデザインを創出します。
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix">
				<div class="section__list">
					<a href="/work/barrierfree/example7-1"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top7.jpg">
						<div class="box__header mincho">木製インクルーシヴデザイン歩道の開発</div>
					</div></a>
					<a href="/work/barrierfree/example7-2"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top7-2+.jpg">
						<div class="box__header--2 mincho">九州大学キャンパス<br>インクルーシヴデザイン検討研究会</div>
					</div></a>
				</div>
			</div>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>