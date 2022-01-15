<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
    <meta charset="UTF-8" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="<?php echo CANONICAL ?>">
    <meta name="keywords" content="<?php echo KEY_WORD ?>">
    <meta name="description" content="<?php echo DESCRIPTION ?>">
    <meta property="og:title" content="<?php echo SITE_NAME ?>">
    <meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
    <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
    <meta property="og:url" content="<?php echo CANONICAL ?>" />

    <title><?php echo SITE_NAME ?></title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
    <div id="AllBox">
        <header>
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
        </header>

        <main>
            <section class="sect_1">
                <div class="wrapper">
                    <div class="content">

                    </div>
                </div>
            </section>
            <section class="sect_2">
                <div class="wrapper">
                    <div class="container">
                        <div class="content">
                            <div class="ttl_cont">
                                <img src="/images/top/sect_2/header_txt_1.svg" class="ttl" alt="ぼくたち、わたしたちの未来を築く場所">
                                <picture>
                                    <source srcset="/images/top/sect_2/sp/header_txt_2.svg" media="(max-width: 899px)">
                                    <img src="/images/top/sect_2/header_txt_2.svg" class="sub" alt="遠鉄の学童保育" class="">
                                </picture>
                                <img src="/images/top/sect_2/header_dot.svg" class="dot" alt="Dot">
                            </div>
                            <p class="desc">
                                子どもたちが放課後、学校のグラウンドや公園で楽しく遊ぶ姿。<br>
                                ひと昔前ではごくごく普通の光景でした。<br>
                                しかし、子どもたちが巻き込まれる事故や事件が多くなった昨今、<br class="pc">
                                特に小学生を子に持つ共働きや母子・父子家庭の保護者が、<br class="pc">
                                大切な我が子を安全な場所で安心して預けることが出来る場所が欲しい。<br class="pc">
                                そんな願いからエスポキッズは生まれました。<br>
                                <span></span>
                                単なる預かりではなく、運営母体であるスポーツクラブ事業を活かし、<br class="pc">
                                スポーツクラブならではの運動や知育の充実したカリキュラムの元、<br class="pc">
                                お子様の人間的豊かさをより一層育みます。
                            </p>
                        </div>
                        <img src="/images/top/sect_2/img_1.png" class="img_tl" alt="">
                        <picture>
                            <source srcset="/images/top/sect_2/sp/img_2.png" media="(max-width: 899px)">
                            <img src="/images/top/sect_2/img_2.png" class="img_tr" alt="遠鉄の学童保育" class="">
                        </picture>
                        <div class="row">
                            <div class="col">
                                <img src="/images/top/sect_2/img_4.png" class="kid_img" alt="新入生募集中!!" class="">
                                <div class="float_img">
                                    <picture>
                                        <source srcset="/images/top/sect_2/sp/img_3.png" media="(max-width: 899px)">
                                        <img src="/images/top/sect_2/img_3.png" alt="新入生募集中!!" class="">
                                    </picture>
                                </div>
                            </div>
                            <div class="col">
                                <h3>
                                    <img src="/images/top/sect_2/txt_img_1.svg" alt="新入生募集中!!">
                                </h3>
                                <h4>
                                    職場体験・季節イベント・外出イベントも充実!<br>
                                    エスポキッズは、今までの学童保育に習い事を<br class="sp">ミックスした<br class="pc">
                                    新しいかたちのアフタースクール!
                                </h4>
                                <img src="/images/top/sect_2/row_dot.svg" class="p_border" alt="">
                                <p>月額(税込) <br class="sp"><span>5,500</span>円(週1回) 〜 <span>22,000</span>円(週5回)</p>
                                <img src="/images/top/sect_2/row_dot.svg" class="p_border" alt="">
                                <div class="tel">
                                    <p class="tel__txt sp">お気軽にご連絡ください!</p>
                                    <img src="/images/top/sect_2/tel_txt.svg" class="tel__txt pc" alt="お気軽にご連絡ください!">
                                    <a href="tel:053-462-4414">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="444.41" height="446.4"
                                            viewBox="0 0 444.41 446.4">
                                            <g id="bbd0e6ac-2251-46ce-976d-20844c02c191" data-name="Layer 2">
                                                <g id="a1a7dde7-5409-4fd6-93c5-2ab675432fef" data-name="編集モード">
                                                    <path
                                                        d="M374.11,266.1c-9.7-10.1-21.4-15.5-33.8-15.5s-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6,8.2-7.5,15.8-15.3,23.2-22.8,2.8-2.8,5.6-5.7,8.4-8.5,21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6C114.11,5.1,102.51,0,90.31,0s-24,5.1-34,14.7l-.2.2-34,34.3A73.16,73.16,0,0,0,.41,95.7c-2.4,29.2,6.2,56.4,12.8,74.2,16.2,43.7,40.4,84.2,76.5,127.6,43.8,52.3,96.5,93.6,156.7,122.7,23,10.9,53.7,23.8,88,26,2.1.1,4.3.2,6.3.2,23.1,0,42.5-8.3,57.7-24.8.1-.2.3-.3.4-.5,5.2-6.3,11.2-12,17.5-18.1,4.3-4.1,8.7-8.4,13-12.9,9.9-10.3,15.1-22.3,15.1-34.6s-5.3-24.3-15.4-34.3Z" />
                                                </g>
                                            </g>
                                        </svg>
                                        053-462-4414
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_3">
                <div class="wrapper">
                    <div class="container">
                    </div>
                </div>
            </section>
        </main>

        <!-- <footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer> -->
    </div><!-- //AllBox -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>