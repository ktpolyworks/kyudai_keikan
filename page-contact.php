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
							九州大学<br>
							<h2>景観研究室</h2>
							<h3>HIGUCHI AKIHIKO LABORATORY</h3>
						</td>
						<td class="td2">
							〒819-0395<br>福岡市西区元岡744番地<br>九州大学伊都キャンパス ウエスト 3号館 815号室<br><br>
							TEL：092-802-3436 FAX：092-802-3435<br>
							mail ： higuchi3333@gmail.com
						</td>
					</tr>
				</table>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.3694711363514!2d130.2148816652029!3d33.595716830732684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541e95d2c608c43%3A0x124ae5657920ae03!2z44CSODE5LTAzODUg56aP5bKh55yM56aP5bKh5biC6KW_5Yy65YWD5bKhIOWbveeri-Wkp-WtpuazleS6uuS5neW3nuWkp-WtpuS8iumDveOCreODo-ODs-ODkeOCueOCpuOCqOOCueODiO-8k-WPt-mkqA!5e0!3m2!1sja!2sjp!4v1519976536958" frameborder="0" class="section__map" allowfullscreen></iframe>
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