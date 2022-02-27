<?php
/*
Template Name: BLOG ページ
*/

$paged = (int) get_query_var('paged');
$args = array(
    'posts_per_page' => 5,
    'paged' => $paged,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
);
$the_query = new WP_Query($args);

$args['posts_per_page'] = 3;
$args['paged'] = 1;
$recent_query = new WP_Query($args);

//ページネーション用コード
$big = 999999999;
$_paginate = paginate_links([
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var( 'paged' ) ),
	'prev_text' => '<span>前のページへ</span>',
	'next_text' => '<span>次のページへ</span>',
	'total' => $the_query->max_num_pages
]);

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
					<?php
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post();
								get_template_part( 'article-list', get_post_format() );
							endwhile;
						endif;
						wp_reset_postdata();
					?>
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
	<script src="<?php print get_template_directory_uri(); ?>/js/blog.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>