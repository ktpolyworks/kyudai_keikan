<?php
/*
Template Name: WORK 子ページ（カテゴリ1）
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__section">
					<div class="topImage imgLiquid">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top1.jpg">
					</div>
				</div>
				<div class="eyeCatch__section eyeCatch__section--2">
					<div class="eyeCatch__section__title">まちを元気にする<h1 class="mincho">ローカルデザイン</h1></div>
					<div class="eyeCatch__section__note">
						それぞれの地域には、独自の歴史や文化、暮らし、風景があります。その地域のまちづくりやデザインの仕事をする際には、その土地の履歴を読み解いた上で、その場所を訪ねる人、使う人たちのことを想像することが大切。そこの地域性をうまく掴み取ったデザインは、地域の愛着を生み、賑わいをもたらすことができるのです。
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix">
				<div class="section__list">
					<a href="/work/localdesign/example1-1"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top1-2.jpg">
						<div class="box__header mincho">遠賀川直方の水辺</div>
					</div></a>
					<a href="/work/localdesign/example1-2"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top1-3.jpg">
						<div class="box__header mincho">唐津東港</div>
					</div></a>
					<a href="/work/localdesign/example1-3"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top1-4.jpg">
						<div class="box__header mincho">大分市線路敷ボードウオーク広場</div>
					</div></a>
				</div>
			</div>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>