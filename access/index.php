<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
    <meta charset="UTF-8" />
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="<?php echo CANONICAL ?>" />
    <meta name="keywords" content="<?php echo KEY_WORD ?>" />
    <meta name="description" content="<?php echo DESCRIPTION ?>" />
    <meta property="og:title" content="<?php echo SITE_NAME ?>" />
    <meta property="og:type" content="website" />
    <!-- 下層では「article」にしてください -->
    <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
    <meta property="og:url" content="<?php echo CANONICAL ?>" />

    <title><?php echo SITE_NAME ?></title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Access">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
    <div id="AllBox">
        <header>
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
        </header>

        <main>
            <section class="c-mainVisual c-mainVisual--access">
                <div class="wrapper">
                    <div class="bg">
                    </div>
                    <div class="container">
                        <div class="text">
                            <h1>
                                <img src="/images/access/sect_1/img_page_title_access.svg" class="ttl" alt="アクセス">
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_2">
                <div class="wrapper">
                    <div class="container">
                        <div class="content">
                            <div class="ttl_cont">
                                <h2>
                                    <picture>
                                        <source srcset="/images/access/sect_2/sp/header_txt_2.svg"
                                            media="(max-width: 899px)">
                                        <img src="/images/access/sect_2/header_txt_2.svg" class="sub" alt="遠鉄の学童保育"
                                            class="">
                                    </picture>
                                </h2>
                                <img src="/images/top/sect_2/header_dot.svg" class="dot" alt="Dot">
                            </div>
                            <p class="desc">
                                新しい友達と出会い。新しい自分と出会い。全てがここから始まります。<br>
                                こどもたちが、安全に安心して楽しく学べる環境が、揃っています。
                            </p>
                        </div>
                        <img src="/images/access/sect_2/img_1.png" class="img_tl" alt="kid_img">
                        <picture>
                            <source srcset="/images/top/sect_2/sp/img_2.png" media="(max-width: 899px)">
                            <!-- <img src="/images/top/sect_2/img_2.png" class="img_tr" alt="遠鉄の学童保育" class=""> -->
                        </picture>
                        <div class="row">
                            <div class="col">
                                <img src="/images/access/sect_2/img_4.png" class="map" alt="新入生募集中!!" class="">
                                <!-- <div class="float_img">
                                    <picture>
                                        <source srcset="/images/top/sect_2/sp/img_3.png" media="(max-width: 899px)">
                                        <img src="/images/top/sect_2/img_3.png" alt="新入生募集中!!" class="">
                                    </picture>
                                </div> -->
                            </div>
                            <div class="col">
                                <div class="col-content">
                                    <h3>
                                        <img src="/images/access/sect_2/txt_img_1.svg" class="slogan" alt="新入生募集中!!">
                                    </h3>
                                    <p class="col-sub">運営：遠鉄スポーツクラブ・エスポ</p>
                                    <h4>
                                        〒430-0903　浜松市中区助信町51-5<br class="sp">（浜松中心部 / 助信駅前）<br>
                                        TEL: 053-462-4414 / FAX: 053-462-4415
                                    </h4>
                                    <div class="tel">
                                        <p>営業<br>時間</p>
                                        <p>月～金曜日 / 13：00～19：00<br>祝・長期休 / 8：30～19：00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
        </footer>
    </div>
    <!-- //AllBox -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>