<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">
 
	<?php
	if ($str[1] == "") {
		echo '<h1 class="logo"><a href="/espokids/">'. SITE_NAME .'</a></h1>';
	} else {
		echo '<p class="logo"><a href="/espokids/">'. SITE_NAME .'</a></p>';
	}
	?>

	<nav class="nav">
		<ul class="nav__list">
			<li class="nav__item"><a href="/espokids/" class="nav__link" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>><img src="/espokids/images/common/link_house_icon.svg" class="pc" alt=""><span class="sp">ホーム</span></a></li>
			<li class="nav__item"><a href="/espokids/service/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>>サービス内容</a></li>
			<li class="nav__item"><a href="/espokids/rates/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>>料金<span class="sp">について</span></a></li>
			<li class="nav__item"><a href="/espokids/access/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>><span class="sp">施設&</span>アクセス</a></li>
			<li class="nav__item sp"><a href="/espokids/rates/#price-simulation" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>>料金シュミレーション</a></li>
			<li class="nav__item"><a href="tel:053-462-4414" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>><span class="txt pc">お気軽にご連絡ください</span> <span class="txt sp">お問い合わせ</span> 
														<span class="tel">
														<svg xmlns="http://www.w3.org/2000/svg" width="444.41" height="446.4" viewBox="0 0 444.41 446.4"><g id="bbd0e6ac-2251-46ce-976d-20844c02c191" data-name="Layer 2"><g id="a1a7dde7-5409-4fd6-93c5-2ab675432fef" data-name="編集モード"><path d="M374.11,266.1c-9.7-10.1-21.4-15.5-33.8-15.5s-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6,8.2-7.5,15.8-15.3,23.2-22.8,2.8-2.8,5.6-5.7,8.4-8.5,21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6C114.11,5.1,102.51,0,90.31,0s-24,5.1-34,14.7l-.2.2-34,34.3A73.16,73.16,0,0,0,.41,95.7c-2.4,29.2,6.2,56.4,12.8,74.2,16.2,43.7,40.4,84.2,76.5,127.6,43.8,52.3,96.5,93.6,156.7,122.7,23,10.9,53.7,23.8,88,26,2.1.1,4.3.2,6.3.2,23.1,0,42.5-8.3,57.7-24.8.1-.2.3-.3.4-.5,5.2-6.3,11.2-12,17.5-18.1,4.3-4.1,8.7-8.4,13-12.9,9.9-10.3,15.1-22.3,15.1-34.6s-5.3-24.3-15.4-34.3Z"/></g></g></svg>
															053-462-4414</span></a></li>
			<li class="nav__item sp"><a href="/espokids/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>>資料請求はこちらから</a></li>
			<li class="nav__item sp"><a href="/espokids/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>><img src="/espokids/images/common/triangle_icon.png" alt="">利用規約</a></li>
			<li class="nav__item sp"><a href="/espokids/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>><img src="/espokids/images/common/triangle_icon.png" alt="">お問合せ</a></li>
			<li class="nav__item sp"><a href="/espokids/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>><img src="/espokids/images/common/nav_sp_img_1.png" alt=""></a></li>
			<li class="nav__item sp"><a href="/espokids/" class="nav__link" <?php if ($str[1] == "") {
															echo ' class="here"';
														} ?>><img src="/espokids/images/common/nav_sp_img_2.svg" alt=""></a></li>
		</ul>
	</nav>

	<div class="menu sp" id="nav_menu">
		<span class="line line-t"></span>
		<span class="line line-m"></span>
		<span class="line line-b"></span>
		<p></p>
	</div>

</div>
