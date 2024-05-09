<?php
/*
Template Name: CONTACT ページ
*/
get_header(); ?>
	<main>
		<section class="eyeCatch">
			<div class="contents clearfix contents--shrinked">
				<div class="eyeCatch__title"><h1>CONTACT</h1></div>
				<div id="alertMessage" class="alertMessage"></div>
				<div id="notifyMessage" class="notifyMessage"></div>
				<table class="contactForm" data="<?php echo get_stylesheet_directory_uri(); ?>/sendMessage">
					<tr>
						<td class="td1">
							<div class="section__title__bar section__title__bar--1">
								<div class="__box"></div>
							</div>
							<div class="section__title__bar section__title__bar--2">
								<div class="__box"></div>
								<div class="__title mincho">お名前</div>
							</div>
						</td>
						<td class="td2">
							<input type="text" class="form" id="contactform-name">
						</td>
					</tr>
					<tr>
						<td class="td1">
							<div class="section__title__bar section__title__bar--1">
								<div class="__box"></div>
							</div>
							<div class="section__title__bar section__title__bar--2">
								<div class="__box"></div>
								<div class="__title mincho">メールアドレス</div>
							</div>
						</td>
						<td class="td2">
							<input type="text" class="form" id="contactform-email">
						</td>
					</tr>
					<tr>
						<td class="td1">
							<div class="section__title__bar section__title__bar--1">
								<div class="__box"></div>
							</div>
							<div class="section__title__bar section__title__bar--2">
								<div class="__box"></div>
								<div class="__title mincho">件名</div>
							</div>
						</td>
						<td class="td2">
							<input type="text" class="form" id="contactform-title">
						</td>
					</tr>
					<tr>
						<td class="td1">
							<div class="section__title__bar section__title__bar--1">
								<div class="__box"></div>
							</div>
							<div class="section__title__bar section__title__bar--2">
								<div class="__box"></div>
								<div class="__title mincho">お問い合せ内容</div>
							</div>
						</td>
						<td class="td2">
							<textarea class="form" id="contactform-body"></textarea>
						</td>
					</tr>
				</table>
				<div class="contactFormButton">
					<button class="cinfirmMessage"><span style="letter-spacing: 1em;">確</span>認<span class="highlight"></span></button>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="contents clearfix contents--middle">
				<table class="section__info">
					<tr>
						<td class="td1">
							<h2><img src="<?php print get_template_directory_uri(); ?>/img/logo_b.svg" alt="一般社団法人LSD サステナブルデザイン研究室 Laboratory for Sustainable Design" class="footer__logo"></h2>
						</td>
						<td class="td2">
							〒819-0388<br>福岡市西区九大新町<br>いと Lab+ 研究開発棟 1F<br><br>
							TEL：090-3070-5376<br>
							mail ： higuchi3333@gmail.com
						</td>
					</tr>
				</table>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14396.203574069203!2d130.2204762533521!3d33.59748650734964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541ebc6b7201369%3A0xcf88213cc89035d5!2z44GE44GoTGFi77yLIOeglOeptumWi-eZuuajnw!5e0!3m2!1sja!2sjp!4v1714444104105!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="section__map"></iframe>
			</div>
		</section>
		<div class="gotoTop contents">
			<button class="go_top">PAGE TOP <div class="arrow"></div></button>
		</div>
		<div class="contactModal hide">
			<div class="contactModal__bg closeModal"></div>
			<div class="contactModal__box xyCenter">
				<ul>
					<li>
						<div id="alert-general" class="alertMessage"></div>
						<div class="midashi mincho">お名前</div>
						<div id="confirm-name"></div>
						<div id="alert-name" class="alertMessage"></div>
					</li>
					<li>
						<div class="midashi mincho">メールアドレス</div>
						<div id="confirm-email"></div>
						<div id="alert-email" class="alertMessage"></div>
					</li>
					<li>
						<div class="midashi mincho">件名</div>
						<div id="confirm-title"></div>
						<div id="alert-title" class="alertMessage"></div>
					</li>
					<li>
						<div class="midashi mincho">お問い合わせ内容</div>
						<div id="confirm-body"></div>
						<div id="alert-body" class="alertMessage"></div>
					</li>
					<li class="text-center">
						<button class="execSubmit">送る</button>
					</li>
				</ul>
			</div>
		</div>
	</main>
	<!-- JS Files -->
	<script src="<?php print get_template_directory_uri(); ?>/js/common.js?<?php print LAUNCH_VERSION; ?>"></script>
	<script src="<?php print get_template_directory_uri(); ?>/js/contact.js?<?php print LAUNCH_VERSION; ?>"></script>
<?php get_footer(); ?>