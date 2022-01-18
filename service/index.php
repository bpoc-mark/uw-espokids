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

<body id="Service">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
    <div id="AllBox">
        <header>
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
        </header>

        <main>
            <section class="c-mainVisual c-mainVisual--services">
                <div class="wrapper">
                    <div class="bg">
                    </div>
                    <div class="container">
                        <div class="text">
                            <h1>
                                <img src="/images/service/page_ttl.svg" class="ttl" alt="サービス内容">
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
                                <img src="/images/service/sect_2/ttl_img.svg" class="ttl" alt="多彩なカリキュラム （有料サービス・選択制）">
                                <img src="/images/top/sect_2/header_dot.svg" class="dot" alt="Dot">
                                <p>
                                    エスポだから出来る、習い事は運動・知育の両面をご提供します。<br>
                                    習い事は有料になります。
                                </p>
                                <a href="">料金はこちら <img src="/images/service/sect_5/arrow_icon.svg" alt=""></a>
                            </div>
                            <img src="/images/service/sect_2/img_1.png" class="img_tl" alt="多彩なカリキュラム （有料サービス・選択制）">
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_3">
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3 class="ttl"><img src="/images/service/sect_3/ttl_img_1.svg" alt="運動系"></h3>
                                <div class="info_row">
                                    <div class="content">
                                        <h4>スイミング</h4>
                                        <img src="/images/service/sect_3/ttl_border.png" class="border" alt="dash"> 
                                        <p>エスポ ジュニアスクールの代名詞。衛生的で水のきれいなプールで正しい泳法技術習得を目指します。クロール・背泳ぎ・バタフライ・平泳ぎ・個人メドレーの順番に指導いたします。</p>
                                        <img src="/images/service/sect_3/row_1_img_1.png" class="main_img" alt="スイミング">
                                    </div>
                                </div>
                                <div class="info_row reverse">
                                    <div class="content">
                                        <h4>ヒップホップダンス </h4>
                                        <img src="/images/service/sect_3/ttl_border.png" class="border" alt="dash"> 
                                        <p>幼いうちからのリズム体験で、お子様の未知の能力を発見してみませんか？お子様のリズム感と基礎体力を楽しく学びます。</p>
                                        <img src="/images/service/sect_3/row_1_img_2.png" class="main_img" alt="ヒップホップダンス ">
                                    </div>
                                </div>
                                <div class="info_row">
                                    <div class="content">
                                        <h4>スポーツスクール </h4>
                                        <img src="/images/service/sect_3/ttl_border.png" class="border" alt="dash"> 
                                        <p>鉄棒・とび箱・なわとび等を使って、運動の基礎を楽しく身に付けます。</p>
                                        <img src="/images/service/sect_3/row_1_img_3.png" class="main_img" alt="スポーツスクール ">
                                    </div>
                                </div>
                                <img src="/images/service/sect_3/float_img_1.png" class="float_br" alt="運動系">
                            </div>
                            <div class="col">
                                <h3 class="ttl"><img src="/images/service/sect_3/ttl_img_2.svg" alt="知育系"></h3>
                                <div class="info_row">
                                    <div class="content">
                                        <h4>プログラミング</h4>
                                        <img src="/images/service/sect_3/ttl_border-2.png" class="border" alt="dash"> 
                                        <p>創造力と思考力を高めるアクティブ・ラーニング！思い描いたことを形にし、道筋立てて解決するための方法やクリエイティブな発想力が身につきます。</p>
                                        <img src="/images/service/sect_3/row_1_img_4.png" class="main_img" alt="プログラミング">
                                    </div> 
                                </div>
                                <div class="info_row reverse">
                                    <div class="content">
                                        <h4>習字</h4>
                                        <img src="/images/service/sect_3/ttl_border-2.png" class="border" alt="dash"> 
                                        <p>書道塾舟華で硬筆・毛筆を学びます。字のきまり、書き順を正しく指導します。</p>
                                        <img src="/images/service/sect_3/row_1_img_5.png" class="main_img" alt="習字">
                                    </div> 
                                </div>
                                <div class="info_row">
                                    <div class="content">
                                        <h4>英会話</h4>
                                        <img src="/images/service/sect_3/ttl_border-2.png" class="border" alt="dash"> 
                                        <p>英語で自己表現ができ、外国人としっかりコミュニケーションがとれるようになります。</p>
                                        <img src="/images/service/sect_3/row_1_img_6.png" class="main_img" alt="英会話">
                                    </div> 
                                </div>
                                <div class="info_row reverse">
                                    <div class="content">
                                        <h4>フォニックス</h4>
                                        <img src="/images/service/sect_3/ttl_border-2.png" class="border" alt="dash"> 
                                        <p>読む力を基盤とした文法をしっかり身に着けていきます。</p>
                                        <img src="/images/service/sect_3/row_1_img_7.png" class="main_img" alt="フォニックス">
                                    </div> 
                                </div>
                                <div class="info_row ">
                                    <div class="content">
                                        <h4>作文教室</h4>
                                        <img src="/images/service/sect_3/ttl_border-2.png" class="border" alt="dash"> 
                                        <p>読解と作文を通して、すべての学習の基礎となる思考力を養う教室です。</p>
                                        <img src="/images/service/sect_3/row_1_img_8.png" class="main_img" alt="作文教室">
                                    </div> 
                                </div>
                                <img src="/images/service/sect_3/float_img_2.png" class="float_tr pc" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_4">
                <div class="wrapper">
                    <div class="container">
                        <div class="ttl">
                            <h3><img src="/images/service/sect_4/ttl_img.svg" alt="1日の流れ"></h3>
                            <img src="/images/service/sect_4/ttl_border.svg" class="border" alt="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="col-ttl">平日（通常月）</h4>
                                <div class="sched_cont">
                                    <div class="schedule">
                                        <div class="time">
                                            <p>〜15：00</p>
                                        </div>
                                        <div class="info">
                                            <p>各学校から集合</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>15：00</p>
                                        </div>
                                        <div class="info">
                                            <p>宿題時間</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>16：00</p>
                                        </div>
                                        <div class="info">
                                            <p>おやつ＆自由時間</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>16：30</p>
                                        </div>
                                        <div class="info">
                                            <p>カリキュラム実施</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>18：00</p>
                                        </div>
                                        <div class="info">
                                            <p>自由時間</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>18：00</p>
                                        </div>
                                        <div class="info">
                                            <p>帰宅</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="sub">※延長のお預かりもできます。</p>
                            </div>
                            <div class="col">
                                <h4 class="col-ttl">長期休み・祝日</h4>
                                <div class="sched_cont">
                                    <div class="schedule">
                                        <div class="time">
                                            <p>〜8：30</p>
                                        </div>
                                        <div class="info">
                                            <p>各自集合</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>9：00</p>
                                        </div>
                                        <div class="info">
                                            <p>宿題時間</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>10：00</p>
                                        </div>
                                        <div class="info">
                                            <p>遊びの時間</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>12：00</p>
                                        </div>
                                        <div class="info">
                                            <p>昼食</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>13：00</p>
                                        </div>
                                        <div class="info">
                                            <p>ゆっくり時間</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>14：30</p>
                                        </div>
                                        <div class="info">
                                            <p>カリキュラム実施</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>15：30</p>
                                        </div>
                                        <div class="info">
                                            <p>おやつ＆自由</p>
                                        </div>
                                    </div>
                                    <div class="schedule">
                                        <div class="time">
                                            <p>19：00</p>
                                        </div>
                                        <div class="info">
                                            <p>帰宅</p>
                                        </div>
                                    </div>
                                </div> 
                                <p class="sub">※延長のお預かりもできます。</p>
                                <p class="desc">※スケジュールはあくまで参考となります。<br>実施期間は変更する場合があります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_5">
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3>お迎えサービス（有料サービス）</h3>
                                <p>
                                    大切なお子様の為に安心・安全面を最重視します。エスポキッズ近隣の小学校へお迎え（徒歩・電車・タクシー等）します。<br class="sp">(有料サービス）<br>
                                    <br class="pc">
                                    お迎えサービスお預かりするエスポキッズ施設は、完全オートロックの為安全です。お子様が到着しだい、保護者の携帯に到着メールを送信しますので、安心出来ます。
                                </p>
                                <a href="">料金はこちら <img src="/images/service/sect_5/arrow_icon.svg" alt=""></a>
                            </div>
                            <div class="col">
                                <picture>
                                    <source srcset="/images/service/sect_5/sp/img_1.jpg" media="(max-width: 899px)">
                                    <img src="/images/service/sect_5/img_1.png" class="" alt="お迎えサービス（有料サービス）">
                                </picture>
                            </div>
                        </div>
                        <div class="row reverse">
                            <div class="col">
                                <h3>柔軟な利用形態</h3>
                                <p>急な用事など親の「困った」にも柔軟に対応。お預かり時間も選択できるから大変便利です。</p>
                                <ul>
                                    <li>
                                        <p>●19時までお預かりの「レギュラー会員」</p>
                                    </li>
                                    <li>
                                        <p>●お預かり時間の延長も可能、食事の手配もいたします。</p>
                                    </li>
                                    <li>
                                        <p>●就労証明書といった面倒な申請は必要ありません。</p>
                                    </li>
                                    <li>
                                        <p>●サービスの詳細については<span>こちら</span>の利用規約をご覧下さい。</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <picture>
                                    <source srcset="/images/service/sect_5/sp/img_2.jpg" media="(max-width: 899px)">
                                    <img src="/images/service/sect_5/img_2.png" class="" alt="柔軟な利用形態">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
    </div><!-- //AllBox -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>