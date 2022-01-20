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

<body id="Rates">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
    <div id="AllBox">
        <header>
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
        </header>

        <main>
            <section class="c-mainVisual c-mainVisual--rates">
                <div class="wrapper">
                    <div class="bg">
                    </div>
                    <div class="container">
                        <div class="text">
                            <h1>
                                <img src="/images/rates/sect_1/img_page_title_rates.svg" class="ttl" alt="料金">
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
                                        <source srcset="/images/rates/sect_2/header_text_01.svg" media="(max-width: 899px)">
                                        <img src="/images/rates/sect_2/header_text_01.svg" class="ttl" alt="料金について">
                                    </picture>
                                </h2>
                                <img src="/images/common/header_dot.svg" class="dot" alt="Dot">
                                <p class="text">月額5,500円～ご要望に応じて日数、プランをご選択いただけます。</p>
                            </div>
                        </div>
                        <div class="img_ttl">
                            <picture>
                                <source srcset="/images/rates/sect_2/sp/img_ttl_sp.png" media="(max-width: 899px)">
                                <img src="/images/rates/sect_2/img_ttl.png" class="ttl" alt="img header">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_3">
                <div class="wrapper">
                    <div class="container border">
                        <div class="border">
                            <div class="ttl">
                                <p>レギュラー会員 <br class="u-d-o-sp"><span>（毎週固定曜日の定期的なお預かり）</span></p>
                            </div>
                            <div class="content">
                                <div class="amount-setting">
                                    <p class="amount-setting__ttl">
                                        レギュラー会員（毎週固定曜日の定期的なお預かり）の月会費は、<br> 基本会費+習い事+小学校へのお迎えの合計金額で決まります。
                                    </p>
                                    <ul class="amount-setting__row">
                                        <li class="yellow">
                                            <p>基本会費<br class="u-d-o-pc"><span>（お預かり代+おやつ代）</span></p>
                                        </li>
                                        <span class="u-d-o-pc">+</span>
                                        <li class="orange">
                                            <p>習い事 <br class="u-d-o-pc"><span>（選択サービス）</span></p>
                                        </li>
                                        <span class="u-d-o-pc">+</span>
                                        <li class="green">
                                            <p>小学校へのお迎え<br class="u-d-o-pc"><span>（選択サービス）</span></p>
                                        </li>
                                    </ul>
                                    <div class="amount-setting__btnArea">
                                        <a href="#">
                                            <p> 料金シミュレーションはこちら <img src="/images/common/img_arrow_down.png" class="arrow" alt="Arrow Down"></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="amount-table">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="col--ttl col--ttl__clr1">基本会費（お預かり＋おやつ代）</h3>
                                            <table class="table-1">
                                                <thead>
                                                    <tr>
                                                        <th>期間</th>
                                                        <th>通常期（月〜金）</th>
                                                        <th colspan="2">夏休み（8月）</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bdr_btm">
                                                        <td>週1回</td>
                                                        <td>5,500円</td>
                                                        <td>9,900円</td>
                                                        <td rowspan="7" class="rowspan7">長期夏休みパック利用</td>
                                                    </tr>
                                                    <tr class="bdr_btm">
                                                        <td>週2回</td>
                                                        <td>10,450円</td>
                                                        <td>18,810円</td>
                                                    </tr>
                                                    <tr class="bdr_btm">
                                                        <td>週3回</td>
                                                        <td>14,850円</td>
                                                        <td>26,730円</td>
                                                    </tr>
                                                    <tr class="bdr_btm">
                                                        <td>週4回</td>
                                                        <td>18,700円</td>
                                                        <td>33,660円</td>
                                                    </tr>
                                                    <tr class="bdr_btm">
                                                        <td>週5回</td>
                                                        <td>22,000円</td>
                                                        <td>39,600円</td>
                                                    </tr>
                                                    <tr class="bdr_btm">
                                                        <td>時間スポット（30分）</td>
                                                        <td>550円</td>
                                                        <td class="no-bdr_btm">ー</td>
                                                    </tr>
                                                    <tr>
                                                        <td>延長（前延長）</td>
                                                        <td>550円</td>
                                                        <td>ー</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="desc txt_right">消費税（10％）込の金額表示です。</p>
                                        </div>
                                        <div class="col">
                                            <h3 class="col--ttl col--ttl__clr2">習い事会費（選択サービス）</h3>
                                            <table class="table-2">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>習い事</th>
                                                        <th>1ヶ月料金</th>
                                                        <th>実施日</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="3" class="rowspan">運動系</td>
                                                        <td class="bg-clr">スイミング</td>
                                                        <td class="center_price">3,575円</td>
                                                        <td class="bdr-l">月・火・水・木・金</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-clr">スポーツスクール</td>
                                                        <td class="center_price">3,025円</td>
                                                        <td class="bdr-l">月・木</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-clr">ヒップホップ</td>
                                                        <td class="center_price">2,640円</td>
                                                        <td class="bdr-l">水</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="6" class="rowspan">知育系</td>
                                                        <td class="bg-clr">プログラミング</td>
                                                        <td class="center_price">9,075円</td>
                                                        <td class="bdr-l">木</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-clr">作文教室</td>
                                                        <td class="center_price">9,075円</td>
                                                        <td class="bdr-l">月</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-clr">英会話</td>
                                                        <td class="center_price">9,350円</td>
                                                        <td class="bdr-l">水・金</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-clr">フォニックス</td>
                                                        <td class="center_price">9,350円</td>
                                                        <td class="bdr-l">水・金</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-clr">英会話・フォニックス</td>
                                                        <td class="center_price">14,850円</td>
                                                        <td class="bdr-l">水・金</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-clr br-br5">習字</td>
                                                        <td class="center_price">3,900円</td>
                                                        <td class="bdr-l">火・木</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="desc">消費税（10％）込の金額表示です。</p>
                                            <ul class="d-list">
                                                <li>
                                                    <p>※木曜日の習字のみエスポ外での習い事となります。<br>会場までの送迎はエスポスタッフが行います。</p>
                                                </li>
                                                <li>
                                                    <p>※習い事は各教室の運営基準により受講していただきます。</p>
                                                </li>
                                                <li>
                                                    <p>※受講時に必要な道具や教科書代等は別途必要になります。</p>
                                                </li>
                                                <li>
                                                    <p>※その他ご不明な点は、ご相談下さい。</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h3 class="col--ttl col--ttl__clr3">小学校へのお迎え代（選択サービス）</h3>
                                            <table class="table-3">
                                                <thead>
                                                    <tr>
                                                        <th>学校</th>
                                                        <th>1回あたり</th>
                                                        <th colspan="2">お迎えの手段</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bdr_btm">
                                                        <td>曳馬小</td>
                                                        <td>220円</td>
                                                        <td>エスポキッズスタッフが<br>徒歩にてお迎え</td>
                                                        <td rowspan="2" class="rowspan">サービス提供期間<br>4月〜6月</td>
                                                    </tr>
                                                    <tr class="bdr_btm">
                                                        <td>上島小</td>
                                                        <td>440円</td>
                                                        <td>エスポキッズスタッフが<br>電車にてお迎え</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="sub pc">
                                                <h4>タクシー補助制度について</h4>
                                                <p class="desc">
                                                    補助額は1日あたり最大500円まで。<br>
                                                    週4日以上のお預かりの場合に限ります。<br>
                                                    ※お預かり日数は基本会費に基づきます。
                                                </p>
                                            </div>
                                            <div class="sub pc">
                                                <h4>その他</h4>
                                                <ul class="d-list">
                                                    <li>
                                                        <p>
                                                            ※料金は1ヶ月の実利用回数の実費をいただきます。同じ場所から複数の会員がご乗　車になる場合は、乗車人数でお迎え代金を按分します。<br>
                                                            （例：同じ場所から2名乗車の場合は、お一人あたりは半額となります。）
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3 class="col--ttl col--ttl__clr4">以下の小学校は遠鉄タクシーがお迎え</h3>
                                            <table class="table-4">
                                                <thead>
                                                    <tr>
                                                        <th>学校</th>
                                                        <th>タクシー料金<br><span>（1回あたりの概算）</span></th>
                                                        <th>補助金<br><span>（週4回以上のみ）</span></th>
                                                        <th>タクシー料金<br><span>（補助額<br class="sp">適用後概算）</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>船越小</td>
                                                        <td>900円</td>
                                                        <td>400円</td>
                                                        <td>500円</td>
                                                    </tr>
                                                    <tr>
                                                        <td>佐藤小</td>
                                                        <td>1,100円</td>
                                                        <td rowspan="7" class="rowspan">500円</td>
                                                        <td>600円</td>
                                                    </tr>
                                                    <tr>
                                                        <td>東小</td>
                                                        <td>1,100円</td>
                                                        <td>600円</td>
                                                    </tr>
                                                    <tr>
                                                        <td>城北小</td>
                                                        <td>1,200円</td>
                                                        <td>700円</td>
                                                    </tr>
                                                    <tr>
                                                        <td>中部学園</td>
                                                        <td>1,300円</td>
                                                        <td>800円</td>
                                                    </tr>
                                                    <tr>
                                                        <td>蒲小</td>
                                                        <td>1,400円</td>
                                                        <td>900円</td>
                                                    </tr>
                                                    <tr>
                                                        <td>泉小</td>
                                                        <td>1,400円</td>
                                                        <td>900円</td>
                                                    </tr>
                                                    <tr>
                                                        <td>追分小</td>
                                                        <td>1,400円</td>
                                                        <td>900円</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="sub sp">
                                                <h4>タクシー補助制度について</h4>
                                                <p class="desc">
                                                    補助額は1日あたり最大500円まで。<br>
                                                    週4日以上のお預かりの場合に限ります。<br>
                                                    ※お預かり日数は基本会費に基づきます。
                                                </p>
                                            </div>
                                            <div class="sub sp">
                                                <h4>その他</h4>
                                                <ul class="d-list">
                                                    <li>
                                                        <p>
                                                            ※料金は1ヶ月の実利用回数の実費をいただきます。同じ場所から複数の会員がご乗　車になる場合は、乗車人数でお迎え代金を按分します。<br>
                                                            （例：同じ場所から2名乗車の場合は、お一人あたりは半額となります。）
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="p-list">
                                        <li>
                                            <p>※記載以外の小学校についても、ご要望があればお迎えのご相談に応じます。</p>
                                        </li>
                                        <li>
                                            <p>※お迎えのご要望が発生した時点で、各小学校とお迎えの可否、待ち合わせ場所等の詳細を打合せいたします。小学校の許可がでない場合は、お迎えサービスができない場合もござ　いますのでご了承ください。</p>
                                        </li>
                                    </ul>
                                    <div class="desc_c">
                                        <h5>
                                            <span>【電車でご来館の方】</span><br>
                                            遠鉄電車ご利用のお客様は、弊社で全額補助（該当回数分の乗車券を進呈します）いたします。（弊社スタッフの付き添いはありません）
                                        </h5>
                                        <h5>
                                            <span>【通学定期券をお持ちの場合】</span><br>
                                            定期券区間のうち、小学校最寄の駅またはバス停から助信駅までの定期券購入相当額の30％をエスポに通う日数分に応じて支給いたします。<br>（詳しくはお問合せください。）
                                        </h5>
                                    </div>
                                </div>
                                <div class="amount-table__btnArea">
                                    <a href="#">
                                        <p> 料金シミュレーションはこちら <img src="/images/common/img_arrow_down.png" class="arrow" alt="Arrow Down"></p>
                                    </a>
                                    <p>
                                        ● 初回のみ入会金5,500円、事務手数料5,500円が別途必要になります（レギュラー会員・スポット会員共通）。<br>
                                        ● 基本預かり時間は放課後13:00～19:00とします。<br>
                                        ● 春・夏・冬休み・祝日は朝8:30からお預かりします。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_4">
                <div class="wrapper">
                    <div class="container package_cont">
                        <div class="content">
                            <div class="package__row">
                                <div class="package__col">
                                    <div class="ttl">
                                        <p>スポット会員 <br class="u-d-o-pc"><span>（ご都合に合わせて1回1時間から利用OK）</span>
                                        </p>
                                    </div>
                                    <p class="info">
                                        入会金：5,500円　事務手数料：5,500円<br>
                                        <small>※現在、スポット会員新規受付を休止しております。</small>
                                    </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>時間スポット<br><span>（1回1時間以上から利用可能）</span></th>
                                                <td>550円 / 30分</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="vector">
                                        <picture>
                                            <source srcset="/images/rates/sect_4/sp/img_vector_sp.png" media="(max-width: 899px)">
                                            <img src="/images/rates/sect_4/img_vector.png" alt="vector">
                                        </picture>
                                    </div>
                                </div>
                                <div class="package__col">
                                    <div class="ttl">
                                        <p>長期夏休みパック</p>
                                    </div>
                                    <p class="info">
                                        8時30分～19時まで<br>
                                        ● 習い事、お迎え代は別途有料<br class="u-d-o-sp">(オプション選択)。</br>
                                    </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>半日</th>
                                                <td>3,080円</td>
                                            </tr>
                                            <tr>
                                                <th>1日</th>
                                                <td>3,850円</td>
                                            </tr>
                                            <tr>
                                                <th>3日</th>
                                                <td>11,080円</td>
                                            </tr>
                                            <tr>
                                                <th>5日</th>
                                                <td>17,710円</td>
                                            </tr>
                                            <tr>
                                                <th>10日</th>
                                                <td>31,570円</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container options_cont">
                        <div class="content">
                            <div class="options__row">
                                <div class="options__col">
                                    <h3>延長（前延長）料金</h3>
                                    <p>5分を経過した場合、30分の延長料金を<br class="sp">頂きます。</p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>延長（前延長）</th>
                                                <td>550円 / 30分</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="options__col">
                                    <h3>食事料金（オプション）</h3>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>昼食：前日19時までに予約</th>
                                                <td>650円／1食</td>
                                            </tr>
                                            <tr>
                                                <th>夕食：当日16時までに予約</th>
                                                <td>800円／1食</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_5">
                <div class="wrapper">
                    <div class="container">
                        <div class="content">
                            <div class="ttl_cont">
                                <picture>
                                    <source srcset="/images/rates/sect_5/header_text_01.svg" media="(max-width: 899px)">
                                    <img src="/images/rates/sect_5/header_text_01.svg" class="ttl" alt="割引制度">
                                </picture>
                                <img src="/images/common/header_dot.svg" class="dot" alt="Dot">
                            </div>
                            <div class="discount">
                                <div class="discount__row">
                                    <div class="discount__row--col">
                                        <h3>
                                            2人目以降の<br class="pc">
                                            <span>事務手数料無料。</span>
                                        </h3>
                                        <p>レギュラー会員・スポット会員ともにOK</p>
                                    </div>
                                    <div class="discount__row--col">
                                        <h3>
                                            兄弟・姉妹が同時に在籍する場合、<br class="pc">
                                            金額の小さい方の<br class="pc">
                                            <span>月会費20％割引。</span>
                                        </h3>
                                        <p>レギュラー会員のみ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_6" id="price-simulation">
                <div class="wrapper">
                    <div class="container">
                        <div class="ttl_cont">
                            <img src="/images/rates/sect_6/header_text_01.svg" class="ttl" alt="料金シミュレーション （レギュラー会員）">
                            <img src="/images/common/header_dot.svg" class="dot" alt="Dot">
                            <p class="text">下記を入力して、「計算する」ボタンを押してください。概算の月会費が表示されます。</p>
                        </div>
                        <div class="content" id="calculate">
                            <div class="calculate__row">
                                <div class="calculate__col">
                                    <span>基本会費</span>
                                    <span class="stamp stamp--required">必須</span>
                                </div>
                                <div class="calculate__col">
                                    <select class="c-select01" id="membership_fee" name="membership_fee">
                                        <option value="0" selected>週何回ご利用されますか？</option>
                                        <option value="5500">週1回(5,500円)</option>
                                        <option value="10450">週2回(10,450円)</option>
                                        <option value="14850">週3回(14,850円)</option>
                                        <option value="18700">週4回(18,700円)</option>
                                        <option value="22000">週5回(22,000円)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculate__row">
                                <div class="calculate__col">
                                    <span>基本会費</span>
                                    <span class="stamp">必須</span>
                                </div>
                                <div class="calculate__col">
                                    <p>ご興味のある習い事をお選び下さい<span>（複数選択可）</span></p>
                                    <br>
                                    <ul class="checkboxGroup">
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-01" value="3,575">
                                            <label class="c-checkbox03__label" for="checkbox-01">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    スイミング週1回(3,575円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-02" value="3,025">
                                            <label class="c-checkbox03__label" for="checkbox-02">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    スポーツスクール(3,025円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-03" value="2,640">
                                            <label class="c-checkbox03__label" for="checkbox-03">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    ヒップホップ(2,640円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-04" value="9,075">
                                            <label class="c-checkbox03__label" for="checkbox-04">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    プログラミング(9,075円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-05" value="9,075">
                                            <label class="c-checkbox03__label" for="checkbox-05">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    作文教室（9,075円）</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-06" value="9,350">
                                            <label class="c-checkbox03__label" for="checkbox-06">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    英会話(9,350円) のコピー</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-07" value="9,350">
                                            <label class="c-checkbox03__label" for="checkbox-07">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    フォニックス(9,350円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-08" value="14,850">
                                            <label class="c-checkbox03__label" for="checkbox-08">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    英会話・フォニックス(14,850円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-09" value="3,900">
                                            <label class="c-checkbox03__label" for="checkbox-09">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    習字(3,900円)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="calculate__row">
                                <div class="calculate__col">
                                    <span>小学校へのお迎え<br><small>※こちらの金額は目安となります</small></span>
                                    <span class="stamp">必須</span>
                                </div>
                                <div class="calculate__col">
                                    <p class="u-d-o-pc">ご興味のある習い事をお選び下さい（複数選択可）</p>
                                    <br class="u-d-o-pc">
                                    <div class="selectionGroup">
                                        <select class="c-select01" id="pickup_fee" name="pickup_fee">
                                            <option value="0" selected>お迎えは利用しない</option>
                                            <option value="220">曳馬小(1回220円)</option>
                                            <option value="440">上島小(1回440円)</option>
                                            <option value="900">船越小(1回900円)</option>
                                            <option value="1100">佐藤小(1回1,100円)</option>
                                            <option value="1100">東　小(1回1,100円)</option>
                                            <option value="1200">城北小(1回1,200円)</option>
                                            <option value="1300">中部学園(1回1,300円)</option>
                                            <option value="1400">蒲　小(1回1,400円)</option>
                                            <option value="1400">泉　小(1回1,400円)</option>
                                            <option value="1400">追分小(1回1,400円)</option>
                                        </select>
                                        <span>×</span>
                                        <select class="c-select01" id="pickup_fee_by_duration" name="pickup_fee_by_duration">
                                            <option value="0" selected>利用回数を選択</option>
                                            <option value="4">週1回(月4回)</option>
                                            <option value="8">週2回(月8回)</option>
                                            <option value="12">週3回(月12回)</option>
                                            <option value="16">週4回(月16回)</option>
                                            <option value="20">週5回(月20回)</option>
                                        </select>
                                    </div>
                                    <small>※子供2人でタクシーを利用する場合は1人あたりは半額となります</small>
                                </div>
                            </div>
                            <div class="calculate__row calculate__btnArea">
                                <button id="btnCompute">
                                    <p>合計金額を計算</p>
                                </button>
                                <div class="calculate__result">
                                    <span class="label">合計金額</span><span class="total"><span id="totalEditable">0,000</span>円<small>（税込）</small></span>
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
    </div><!-- //AllBox -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            function toNumber(str) {
                return str.replace(/[^0-9.]/g, "") * 1;
            }

            function computeLessonFee(elements) {
                let total = 0;
                elements.forEach(item => {
                    total += toNumber(item.getAttribute('value'));
                });
                return total;
            }
            $('.calculate__btnArea #btnCompute').click(function() {
                let membership_fee = toNumber(document.querySelector('#membership_fee').value);
                let lesson_fee_collection = document.querySelectorAll('input[name="lesson_fee[]"]:checked');
                let pickup_fee = toNumber(document.querySelector('#pickup_fee').value);
                let pickup_fee_by_duration = toNumber(document.querySelector('#pickup_fee_by_duration').value);
                let total = (membership_fee + computeLessonFee(lesson_fee_collection)) + (pickup_fee * pickup_fee_by_duration);
                $('.calculate__result #totalEditable').text(total.toLocaleString());
            });
        });
    </script>
</body>

</html>