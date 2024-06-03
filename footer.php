<?php
/**
 * このファイルはフッター・テンプレートです。
 * サイトマップ、アクセス情報等フッター部分に必要な要素をすべて包含します。
 */
?>
	<footer>
		<div class="contents clearfix">
			<div class="footer__section footer__section--title footer__section--logo">
				<h1><img src="<?php print get_template_directory_uri(); ?>/img/logo_g.svg?1" alt="一般社団法人LSD サスティナブルデザイン研究室 Laboratory for Sustainable Design" class="footer__logo"></h1>
			</div>
			<div class="footer__section footer__section--contact">
				<div class="footer__section__title">CONTACT</div>
				<address>
					<p>〒819-0388</p>
					<p>福岡市西区九大新町</p>
					<p>いと Lab+ 研究開発棟 1F</p><br>
					<p>TEL:090-3070-5376</p>
					<p>mail : info@lsd.or.jp</p>
				</address>
			</div>
			<div class="footer__section footer__section--sitemap">
				<div class="footer__section__title">SITE MAP</div>
				<div class="list clearfix">
					<ul class="ul1">
						<li class="category"><a href="/./">● HOME</a></li>
						<li class="category"><a href="/about/">● ABOUT</a></li>
					</ul>
					<ul class="ul2">
						<li class="category"><a href="/work/">● WORKS</a></li>
						<li class="detail">
							<ul>
								<li><a href="/work/localdesign">ローカルデザイン</a></li>
								<li><a href="/work/structure">構造物のデザイン</a></li>
								<li><a href="/work/rules">ルールづくり</a></li>
								<li><a href="/work/scenario">シナリオづくり</a></li>
								<li><a href="/work/spot">観光地のデザイン</a></li>
								<li><a href="/work/green">グリーンインフラ</a></li>
								<li><a href="/work/barrierfree">インクルーシヴデザイン</a></li>
							</ul>
						</li>
					</ul>
					<ul class="ul1">
						<li class="category"><a href="/research/">● RESEARCH</a></li>
						<li class="category"><a href="/partners/">● PARTNERS</a></li>
						<li class="category"><a href="/blog/">● BLOG</a></li>
						<li class="category"><a href="/contact/">● CONTACT</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer__copy">
			Copyright &copy; Laboratory for Sustainable Design All Rights Reserved.
		</div>
	</footer>
</body>
</html>
