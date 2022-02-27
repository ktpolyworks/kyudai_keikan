<?php
/**
 * このファイルはヘッダー・テンプレートです。
 * メニュー等、ヘッダー部分に必要な要素をすべて包含します。
 */

$page = get_page(get_the_ID());
$page_name = $page->post_name;

if( $page_name == "" || is_front_page() ){
	$page_name = "index";
}

if( is_page() && $post->post_parent ){
	$post_data = get_post($post->post_parent);
	$page_name = $post_data->post_name;

	$most_post_id = get_most_parent_pageID(); //最上親のIDを取得する
	$most_post = get_post($most_post_id); //投稿を取得
	$page_name = $most_post->post_name;
}
if( get_post_type() == "post" || is_archive() ){
	$page_name = "blog";
}

$url = get_template_directory_uri().'/';

define("LAUNCH_VERSION",date("YmdHis"));

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php print $url; ?>meanmenu.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
	<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?<?php print LAUNCH_VERSION; ?>">
	<?php print '<link rel="stylesheet" href="'.$url.'css/'.$page_name.'.css?'.LAUNCH_VERSION.'">'; ?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="<?php print $url; ?>js/imgLiquid.js"></script>
	<!--<?php wp_head(); ?>-->
</head>
<body <?php body_class(); ?> data-class="<?php print $page_name ?>">
	<header class="clearfix">
		<div class="contents clearfix">
			<a href="/./"><div class="logo">
				<h1><span>九州大学</span><br>
				景観研究室</h1>
			</div></a>
			<nav>
				<ul id="panel" class="clearfix">
					<li><a href="/./"><button>HOME</button></a></li>
					<li><a href="/about/"><button>ABOUT</button></a></li>
					<li>
						<a class="openDropDownMenu" href="/work/"><button>WORKS</button></a>
						<ul id="submenu" class="DropDownMenu hide submenu">
							<li class="mincho"><a href="/work/localdesign">ローカルデザイン</a></li>
							<li class="mincho"><a href="/work/structure">構造物のデザイン</a></li>
							<li class="mincho"><a href="/work/rules">ルールづくり</a></li>
							<li class="mincho"><a href="/work/scenario">シナリオづくり</a></li>
							<li class="mincho"><a href="/work/spot">観光地のデザイン</a></li>
							<li class="mincho"><a href="/work/green">グリーンインフラ</a></li>
							<li class="mincho"><a href="/work/barrierfree">バリアフリー</a></li>
						</ul>
					</li>
					<li><a href="/research/"><button>RESEARCH</button></a></li>
					<li><a href="/partners/"><button>PARTNERS</button></a></li>
					<li><a href="/blog/"><button>BLOG</button></a></li>
					<li><a href="/contact/"><button>CONTACT</button></a></li>
				</ul>
			</nav>
		</div>
		<div id="snslink">
			<a href="#" id="panel-btn"><span id="panel-btn-icon"></span></a>
		</div>
	</header>