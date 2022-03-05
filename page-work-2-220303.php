<?php
/*
Template Name: WORK 子ページ（カテゴリ2-220303）
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__section">
					<div class="topImage imgLiquid">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top2.jpg">
					</div>
				</div>
				<div class="eyeCatch__section eyeCatch__section--2">
					<div class="eyeCatch__section__title">風景にとけこむ<h1 class="mincho">構造物のデザイン</h1></div>
					<div class="eyeCatch__section__note">
						巨大な土木構造物は、デザインを誤ると地域の風景を一変させ破壊してしまいます。地域の風景に自然にとけこみ、時を経るとともに味わいを増すような土木構造物をデザインすることは、困難な仕事ですが不可能ではありません。
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix">
				<div class="section__list">
					<a href="/work/structure/example2-1"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top2-2.jpg">
						<div class="box__header mincho">嘉瀬川ダムの景観設計</div>
					</div></a>
					<a href="/work/structure/example2-2"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top2-3.jpg">
						<div class="box__header mincho">水天宮横の樋門と石積み堤防</div>
					</div></a>
					<a href="/work/structure/example2-4"><div class="section__box imgLiquid squarelize">
						<img src="<?php print get_template_directory_uri(); ?>/img/works/top2-4.jpg">
						<div class="box__header mincho">勘六橋の架替えと整備</div>
					</div></a>
				</div>
                
			 </div>
		</section>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/work.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>