<?php
/*
Template Name: WORK 子ページ（カテゴリ5）
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__section">
					<div class="topImage imgLiquid">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top5.jpg">
					</div>
				</div>
				<div class="eyeCatch__section eyeCatch__section--2">
					<div class="eyeCatch__section__title">暮らしと景観に馴染む<h1 class="mincho">観光地のデザイン</h1></div>
					<div class="eyeCatch__section__note">
						近年訪日インバウンドが急増し、２０２０年の東京オリンピックに向けてさらに日本への観光ニーズが高まることが予想されます。旅慣れた外国人観光客の満足度を高めるためには、その地域の暮らしや景観を楽しんでもらうためのデザインが必要です。景観研究室はデザインを通じて、九州各地の観光地づくりを応援しています。
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix">
				<div class="section__list">
					<a href="/work/spot/example5-1"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top5-2.jpg">
						<div class="box__header mincho">塩田宿夢プラン</div>
					</div></a>
					<a href="/work/spot/example5-2"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top5-3.jpg">
						<div class="box__header mincho">厳原大町通り歩道部分のデザイン</div>
					</div></a>
				</div>
			</div>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>