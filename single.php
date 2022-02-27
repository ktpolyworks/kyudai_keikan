<?php
/*
Template Name: BLOG ページ（各記事用）
*/

$args = array(
    'posts_per_page' => 3,
    'paged' => 1,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
);
$recent_query = new WP_Query($args);

/*カテゴリ設定*/
$_cat_args = [
	'title_li' => null,
	'orderby' => 'ID', // ID : カテゴリID、 name : カテゴリ名
	'show_count' => 1, // 0 で投稿数非表示
	'use_desc_for_title' => 1, // カテゴリの説明文を title 属性に入れるかどうか（ title 属性はマウスオーバーで表示されます）
	'depth' => 0 //すべてのカテゴリを表示。最上位カテゴリのみの場合は 1 を指定する
];

/*時系列アーカイブ設定*/
$_archive_args = [
	'type' => 'monthly',
	'show_post_count' => true,
	'order' => 'DESC',
	'post_type' => 'post'
];

get_header(); ?>
	<main>
		<?php get_template_part( 'blog', 'top' ); ?>
		<section class="blog">
			<div class="contents">
				<div class="blog__main">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<article class="article">
								<div class="article__time"><?php print get_post_time('F j, Y'); ?></div>
								<div class="article__title mincho"><h1><?php the_title(); ?></h1></div>
								<div class="article__main">
									<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
									<?php the_content(); ?>
								</div>
							</article>
						<?php endwhile; ?>
							<ul class="nav-below">
								<li class="li1"><span class="nav-next"><?php next_post_link('%link', '<i class="ion-arrow-left-b"></i> 新しい記事へ'); ?></span></li>
								<li class="li2"><span><a href="/blog/"><i class="ion-arrow-up-b"></i> ブログ一覧へ</a></span></li>
								<li class="li3"><span class="nav-previous"><?php previous_post_link('%link', '前の記事へ <i class="ion-arrow-right-b"></i>'); ?></span></li>
							</ul>
							<?php comments_template('/article-comments.php'); ?>
					<?php else : ?>
						<h2 class="title">記事が見つかりませんでした。</h2>
						<p>検索で見つかるかもしれません。</p><br />
						<?php get_search_form(); ?>
					<?php endif; ?>
					<div class="paginate"><?php print $_paginate; ?></div>
				</div>
				<div class="blog__sub">
					<div class="section__title__bar section__title__bar--1">
						<div class="__box"></div>
					</div>
					<div class="section__title__bar section__title__bar--2">
						<div class="__box"></div>
						<div class="__title mincho">ENTRY</div>
					</div>
					<div class="section">
						<?php
							if ( $recent_query->have_posts() ) :
								while ( $recent_query->have_posts() ) : $recent_query->the_post();
									get_template_part( 'article-list-recent', get_post_format() );
								endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div>
					<div class="section__title__bar section__title__bar--1">
						<div class="__box"></div>
					</div>
					<div class="section__title__bar section__title__bar--2">
						<div class="__box"></div>
						<div class="__title mincho">CATEGORY</div>
					</div>
					<div class="section">
						<div class="categories">
							<ul>
								<?php wp_list_categories($_cat_args); //カテゴリの呼び出し?>
							</ul>
						</div>
					</div>
					<div class="section__title__bar section__title__bar--1">
						<div class="__box"></div>
					</div>
					<div class="section__title__bar section__title__bar--2">
						<div class="__box"></div>
						<div class="__title mincho">ARCHIVE</div>
					</div>
					<div class="section">
						<div class="categories">
							<ul>
								<?php wp_get_archives($_archive_args); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="gotoTop contents">
			<button class="go_top">PAGE TOP <div class="arrow"></div></button>
		</div>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>