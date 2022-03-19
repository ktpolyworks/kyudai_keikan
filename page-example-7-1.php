<?php
/*
Template Name: WORK 実施例子ページ（7-1）
*/
get_header(); ?>
	<link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/css/example.css?<?php print LAUNCH_VERSION; ?>">
	<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
	<main class="work-main" data-url="<?php print get_template_directory_uri(); ?>/">
		<section class="eyeCatch">
			<div class="contents clearfix">
				<div class="eyeCatch__title"><h1>WORKS</h1></div>
				<div class="eyeCatch__image fixsize" data="map7-01.svg"></div>
				<div class="eyeCatch__intro">
					<div class="intro__header">
						<a href="/work/barrier">多様性のある社会を実現する<span class="mincho">バリアフリー</span></a><br><h1 class="mincho">木製バリアフリー歩道の開発</h1>
					</div>
					<div class="intro__body">
						九大景観研では、10年以上前から視覚障がい者の方々が安全に歩行できる環境を目指して、国産杉材を用いた木製バリアフリー歩道の開発を行っています。<br>　普通の歩道は、車道と同じアスファルトやコンクリートブロックで舗装されています。そのため、視覚障がい者が白杖で触れ他だけでは、車道と歩道の区別がつきません。視覚障がい者誘導ブロックが設置された歩道であっても、一度あの黄色い線を見失ってしまうと車道に誤って飛び出る危険が常にあります。<br>　木製バリアフリー歩道は、木材がアスファルトやコンクリートとは明らかに異なる音響特性を持っていることに着目し、歩道全面に木材を用いることで視覚障がい者が車道に飛び出すリスクをなくすことを目指しています。<br>　また、国産スギ材を使用することにより、脱炭素社会の実現にも貢献することが期待できます。<br>　2018年度までの三年間（科学研究費助成）でその有効性の確認が終了し、今年から実装に向けた啓発活動を展開する予定です。<br><br><link><a href="<?php print get_template_directory_uri(); ?>/pdf/BFhodou_LD.pdf">バリアフリー杉デッキのパンフレットはこちらをご覧ください。</a></link><br><br></div>
				</div>
			</div>
		</section>		
				
		<section class="section">
			<div class="contents clearfix">
				<div class="section__main__image imgLiquid">
					<img src="<?php print get_template_directory_uri(); ?>/img/works/example/11-1.jpg">
				</div>
			<div class="section__main__image__caption">国際スギ板材とコンクリート、アスファルト等との音響特性の違いを示したグラフです。<br>スギ材は、他の硬い物質に比べて、周波数や残響時間で大きく異なる音響性能を持っています。専門機関に依頼して正確なデータを収集しました。</div>	
			</div>
		</section>
				
		<section class="section--2">
			<div class="contents clearfix">
				<div class="example__photos">
					<dl>
						<dt style="background-image:url(<?php print get_template_directory_uri(); ?>/img/works/example/11-2_220303.jpg)"><img src="<?php print get_template_directory_uri(); ?>/img/works/example/11-2_area.png"></dt>
						<dd>▲<br>視覚障がい者にお願いして、国際杉板材、コンクリート、アスファルト等を白杖で叩いた際の音を聴いていただき、音の違いが明確にわかるかどうかの試験（官能試験）を実施しました。最終的に101名の方にご協力いただきましたが、そのうち98名が「音を識別できる」と回答され、音響の違いによる場の識別が可能であることを確認できました。</dd>
					</dl>
					<dl>
						<dt style="background-image:url(<?php print get_template_directory_uri(); ?>/img/works/example/11-3_220303.jpg)"><img src="<?php print get_template_directory_uri(); ?>/img/works/example/11-3_area.png"></dt>
						<dd>▲<br>九大伊都キャンパス内に試験歩道を造成し、そこを視覚障がい者に歩いていただくことで、実際の屋外空間を歩行する際に音響の違いによる場の識別が可能かどうかを検証しました。試験歩道は木製部分とアスファルト部分の各９メートルからなっています。九州各地から43名の方にご協力いただくことができ、試験の結果、木製部分で車道に飛び出した方は一人もおられず、木製バリアフリー歩道には高い実現性があることを確認することができました。</dd>
					</dl>
					<dl>
						<dt style="background-image:url(<?php print get_template_directory_uri(); ?>/img/works/example/11-4_220303.jpg)"><img src="<?php print get_template_directory_uri(); ?>/img/works/example/11-4_area.png"></dt>
						<dd>▲<br>2022年1月27日掲載 西日本新聞<br>木製バリアフリー歩道を取り上げてくださった読売新聞の記事</dd>
					</dl>
				</div>
			</div>
		</section>

		<div class="gotoTop contents">
			<button class="go_top">PAGE TOP <div class="arrow"></div></button>
		</div>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/example.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>